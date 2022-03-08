<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\Image_Category;

use Validator;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = DB::table('images')->get();  
        return view('admin.images.index',['images' => $images])->withTitle('Images');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image_tags = DB::table('image_tags')->get();
       // $image_categories = DB::table('image_categories')->get();
	$image_categories = Image_Category::with('children')->whereNull('parent_id')->get();
        return view('admin.images.create',['image_categories' => $image_categories,'image_tags'=>$image_tags])->withTitle('Create Image');
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
           
            'name'                      =>  'required',
            'slug'                      =>  'required|unique:images', 
            'banner'                    =>  'mimes:jpeg,jpg,png',
            'image_png'                 =>  'required|mimes:jpeg,jpg,png,zip,psd',
            'image_jpg'                 =>  'mimes:jpeg,jpg',
            'image_webp'                =>  'mimes:webp,jpeg,jpg',           
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('banner')){ 
            $extension = $request->file('banner')->extension();
            $banner = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('banner')->storeAs('public/uploads/images',$banner);
        }
        if($request->hasFile('image_png')){ 
            $extension = $request->file('image_png')->extension();
            $image_png = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_png')->storeAs('public/uploads/images',$image_png);
        }
        if($request->hasFile('image_jpg')){ 
            $extension = $request->file('image_jpg')->extension();
            $image_jpg = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_jpg')->storeAs('public/uploads/images',$image_jpg);
        }
        if($request->hasFile('image_webp')){ 
            $extension = $request->file('image_webp')->extension();
            $image_webp = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_webp')->storeAs('public/uploads/images',$image_webp);
        }

        $image_category_id="";
        $image_tag_id="";
     
        if($request->input('image_category_id')!= null){

             $image_category_id= implode(',', $request->input('image_category_id'));
        }
        if($request->input('image_tag_id')!=null){

              $image_tag_id = implode(',', $request->input('image_tag_id'));
        }
                   

        $images = new Image;

        $images->name = $request->input('name');
        $images->slug = str_slug($request->input('slug'));
        $images->banner = $banner;
        $images->image_png = $image_png;
        $images->image_jpg = $image_jpg;
        $images->image_webp = $image_webp;
        $images->alt = $request->input('alt');
	$images->image_size = $request->input('image_size');
	$images->file_format = $request->input('file_format');
        $images->meta_title = $request->input('meta_title');
        $images->meta_description= $request->input('meta_description');        
        $images->meta_keywords= $request->input('meta_keywords');
        $images->image_category_id= $image_category_id;
        $images->image_tag_id= $image_tag_id;
        $images->description= $request->input('description');
        $images->save();
         
        return redirect('admin/images/')->with('success', 'New Image has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image,$id)
    {
        
        $imagescat="";
        $imagestag="";
        $image_tag_id=array();
        $image_category_id=array();
        
        $images = DB::table('images')->where('images.id',$id)->get(); 
        foreach($images as $image)
        {
            $image_tag_id =explode(",",$image->image_tag_id);
            $image_category_id =explode(",",$image->image_category_id);
        }
        
        if($image_category_id){
            $imagescat = DB::table('image_categories')->select('name')->whereIn('image_categories.id',$image_category_id)->get();
        }
        if($image_tag_id){
            $imagestag = DB::table('image_tags')->select('name')->whereIn('image_tags.id',$image_tag_id)->get();
        }

        
        return view('admin.images.view',['images' => $images,'imagescat'=>$imagescat,'imagestag'=>$imagestag])->withTitle('Image Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image,$id)
    {
        $imagesdetail = DB::table('images')->where('id',$id)->get();
        $image_tags = DB::table('image_tags')->get();
        //$image_categories = DB::table('image_categories')->get();
	$image_categories = Image_Category::with('children')->whereNull('parent_id')->get();
        return view('admin.images.edit',['imagesdetail'=>$imagesdetail,'image_tags'=>$image_tags,'image_categories'=>$image_categories])->withTitle('Edit Image');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image,$id)
    {
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required',
            'slug'                      =>  'required|unique:images,slug,'.$id, 
            'banner'                    =>  'mimes:jpeg,jpg,png,zip,psd',
            'image_png'                 =>  'mimes:png',
            'image_jpg'                 =>  'mimes:jpeg,jpg',
            'image_webp'                =>  'mimes:webp,jpeg,jpg',           
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('banner')){ 
            $extension = $request->file('banner')->extension();
            $banner = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('banner')->storeAs('public/uploads/images',$banner);
        }else{
            $banner=$request->input('banner_old');
        }
        if($request->hasFile('image_png')){ 
            $extension = $request->file('image_png')->extension();
            $image_png = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_png')->storeAs('public/uploads/images',$image_png);
        }else{
            $image_png=$request->input('image_png_old');
        }
        if($request->hasFile('image_jpg')){ 
            $extension = $request->file('image_jpg')->extension();
            $image_jpg = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_jpg')->storeAs('public/uploads/images',$image_jpg);
        }else{
            $image_jpg=$request->input('image_jpg_old');
        }
        if($request->hasFile('image_webp')){ 
            $extension = $request->file('image_webp')->extension();
            $image_webp = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_webp')->storeAs('public/uploads/images',$image_webp);
        }else{
            $image_webp=$request->input('image_webp_old');
        }

        $image_category_id="";
        $image_tag_id="";
     
        if($request->input('image_category_id')!= null){

             $image_category_id= implode(',', $request->input('image_category_id'));
        }
        if($request->input('image_tag_id')!=null){

              $image_tag_id = implode(',', $request->input('image_tag_id'));
        }
        $images = Image::find($id);

        $images->name = $request->input('name');
        $images->slug = str_slug($request->input('slug'));
        $images->banner = $banner;
        $images->image_png = $image_png;
        $images->image_jpg = $image_jpg;
        $images->image_webp = $image_webp;
        $images->alt = $request->input('alt');
	$images->image_size = $request->input('image_size');
	$images->file_format = $request->input('file_format');
        $images->meta_title = $request->input('meta_title');
        $images->meta_description= $request->input('meta_description');     
        $images->meta_keywords= $request->input('meta_keywords');
        $images->image_category_id= $image_category_id;
        $images->image_tag_id= $image_tag_id;
        $images->description= $request->input('description');
        $images->update();
         
        return redirect('admin/images/')->with("success", $request->input('name')." Image has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id)
    {
        $images = DB::table('images')->where('id',$id)->delete();
        return redirect('admin/images/')->with('success', 'Image has been deleted.');
    }
}
