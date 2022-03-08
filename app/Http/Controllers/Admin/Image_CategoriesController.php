<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

use Validator;

class Image_CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_categories = DB::table('image_categories')->get();  
        return view('admin.images.categories.index',['image_categories' => $image_categories])->withTitle('Image Categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image_categories = DB::table('image_categories')->whereNull('parent_id')->get();
        return view('admin.images.categories.create',['parentImage_categories' => $image_categories])->withTitle('Create Image Category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner="";
        $image_png="";
        $image_jpg="";
        $image_webp="";
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:image_categories',
            'slug'                      =>  'required|unique:image_categories',
            'banner'                    =>  'mimes:jpeg,jpg,png',
            'image_png'                 =>  'mimes:png',
            'image_jpg'                 =>  'mimes:jpeg,jpg',
            'image_webp'                =>  'mimes:webp',

            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        if($request->hasFile('banner')){ 
            $extension = $request->file('banner')->extension();
            $banner = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('banner')->storeAs('public/uploads/images/categories',$banner);
        }
        if($request->hasFile('image_png')){ 
            $extension = $request->file('image_png')->extension();
            $image_png = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_png')->storeAs('public/uploads/images/categories',$image_png);
        }
        if($request->hasFile('image_jpg')){ 
            $extension = $request->file('image_jpg')->extension();
            $image_jpg = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_jpg')->storeAs('public/uploads/images/categories',$image_jpg);
        }
        if($request->hasFile('image_webp')){ 
            $extension = $request->file('image_webp')->extension();
            $image_webp = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_webp')->storeAs('public/uploads/images/categories',$image_webp);
        }
        $image_categories = new Image_Category;

        $image_categories->name = $request->input('name');
        $image_categories->slug = str_slug($request->input('slug'));
        $image_categories->parent_id = $request->input('parent');
        $image_categories->banner = $banner;
        $image_categories->image_png = $image_png;
        $image_categories->image_jpg = $image_jpg;
        $image_categories->image_webp = $image_webp;
        $image_categories->alt = $request->input('alt');
        $image_categories->banner_search_below = $request->input('banner_search_below');
        $image_categories->popular = $request->input('popular');
        $image_categories->meta_title = $request->input('meta_title');
        $image_categories->meta_description= $request->input('meta_description');
        $image_categories->meta_keywords= $request->input('meta_keywords');
        $image_categories->description= $request->input('description');
        $image_categories->save();
         
        return redirect('admin/image-categories/')->with('success', 'New Image Category has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image_Category  $image_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Image_Category $image_Category,$id)
    {
        $parent_id="";
        $parent_category="";
        $image_categories = DB::table('image_categories')->where('id',$id)->first();
        if($image_categories->parent_id!=null){
            $parent_id=$image_categories->parent_id;
            $parent_category = DB::table('image_categories')->select('name')->where('id',$parent_id)->first();
        }
        
        return view('admin.images.categories.view',['image_categories' => $image_categories,'parent_category'=>$parent_category])->withTitle('Image Category Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image_Category  $image_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Image_Category $image_Category,$id)
    {
        $image_categoriesdetail = DB::table('image_categories')->where('id',$id)->get();        
        $parentimage_categories = DB::table('image_categories')->whereNotIn('id', [$id])->whereNull('parent_id')->get();        
        return view('admin.images.categories.edit',['parentImage_categories' => $parentimage_categories,'image_categoriesdetail'=>$image_categoriesdetail])->withTitle('Edit Image Category');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image_Category  $image_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image_Category $image_Category,$id)
    {
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:image_categories,name,'.$id,
            'slug'                      =>  'required|unique:image_categories,slug,'.$id,
            'banner'                    =>  'mimes:jpeg,jpg,png',
            'image_png'                 =>  'mimes:png',
            'image_jpg'                 =>  'mimes:jpeg,jpg',
            'image_webp'                =>  'mimes:webp',            
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('banner')){ 
            $extension = $request->file('banner')->extension();
            $banner = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('banner')->storeAs('public/uploads/images/categories',$banner);
        }else{
            $banner=$request->input('banner_old');
        }
        if($request->hasFile('image_png')){ 
            $extension = $request->file('image_png')->extension();
            $image_png = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_png')->storeAs('public/uploads/images/categories',$image_png);
        }else{
            $image_png=$request->input('image_png_old');
        }
        if($request->hasFile('image_jpg')){ 
            $extension = $request->file('image_jpg')->extension();
            $image_jpg = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_jpg')->storeAs('public/uploads/images/categories',$image_jpg);
        }else{
            $image_jpg=$request->input('image_jpg_old');
        }
        if($request->hasFile('image_webp')){ 
            $extension = $request->file('image_webp')->extension();
            $image_webp = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_webp')->storeAs('public/uploads/images/categories',$image_webp);
        }else{
            $image_webp=$request->input('image_webp_old');
        }
        
        //$page = new Page;
        $image_categories = Image_Category::find($id);

        $image_categories->name = $request->input('name');
        $image_categories->slug = str_slug($request->input('slug'));
        $image_categories->parent_id = $request->input('parent');
        $image_categories->banner = $banner;
        $image_categories->image_png = $image_png;
        $image_categories->image_jpg = $image_jpg;
        $image_categories->image_webp = $image_webp;
        $image_categories->alt = $request->input('alt');
        $image_categories->banner_search_below = $request->input('banner_search_below');
        $image_categories->popular = $request->input('popular');
        $image_categories->meta_title = $request->input('meta_title');
        $image_categories->meta_description= $request->input('meta_description');               
        $image_categories->meta_keywords= $request->input('meta_keywords');
        $image_categories->description= $request->input('description');
        $image_categories->update();
         
        return redirect('admin/image-categories/')->with("success", $request->input('name')." Image Category has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image_Category  $image_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image_Category $image_Category,$id)
    {
        $image_categories = DB::table('image_categories')->where('id',$id)->delete(); 
        return redirect('admin/image-categories/')->with('success', 'Image Category has been deleted.');
    }
}
