<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image_Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

use Validator;
class Image_TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_tags = DB::table('image_tags')->get();  
        return view('admin.images.tags.index',['image_tags' => $image_tags])->withTitle('Image Tags');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image_tags = DB::table('image_tags')->get();
        return view('admin.images.tags.create',['parentImage_tags' => $image_tags])->withTitle('Create Image Tag');
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
           
            'name'                      =>  'required|unique:image_tags',
            'slug'                      =>  'required|unique:image_tags',
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
            $path = $request->file('banner')->storeAs('public/uploads/images/tags',$banner);
        }
        if($request->hasFile('image_png')){ 
            $extension = $request->file('image_png')->extension();
            $image_png = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_png')->storeAs('public/uploads/images/tags',$image_png);
        }
        if($request->hasFile('image_jpg')){ 
            $extension = $request->file('image_jpg')->extension();
            $image_jpg = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_jpg')->storeAs('public/uploads/images/tags',$image_jpg);
        }
        if($request->hasFile('image_webp')){ 
            $extension = $request->file('image_webp')->extension();
            $image_webp = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_webp')->storeAs('public/uploads/images/tags',$image_webp);
        }

        $image_tags = new Image_tag;

        $image_tags->name = $request->input('name');
        $image_tags->slug = str_slug($request->input('slug'));
        $image_tags->banner = $banner;
        $image_tags->image_png = $image_png;
        $image_tags->image_jpg = $image_jpg;
        $image_tags->image_webp = $image_webp;
        $image_tags->alt = $request->input('alt');
        $image_tags->meta_title = $request->input('meta_title');
        $image_tags->meta_description= $request->input('meta_description');       
        $image_tags->meta_keywords= $request->input('meta_keywords');
        $image_tags->description= $request->input('description');
        $image_tags->save();
         
        return redirect('admin/image-tags/')->with('success', 'New Image Tag has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image_Tag  $image_Tag
     * @return \Illuminate\Http\Response
     */
    public function show(Image_Tag $image_Tag,$id)
    {
        $image_tags = DB::table('image_tags')->where('id',$id)->first();  
        return view('admin.images.tags.view',['image_tags' => $image_tags])->withTitle('Image Tag Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image_Tag  $image_Tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Image_Tag $image_Tag,$id)
    {
        $image_tagsdetail = DB::table('image_tags')->where('id',$id)->get();      
        return view('admin.images.tags.edit',['image_tagsdetail'=>$image_tagsdetail])->withTitle('Edit Image Tag');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image_Tag  $image_Tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image_Tag $image_Tag,$id)
    {
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:image_tags,name,'.$id,
            'slug'                      =>  'required|unique:image_tags,slug,'.$id, 
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
            $path = $request->file('banner')->storeAs('public/uploads/images/tags',$banner);
        }else{
            $banner=$request->input('banner_old');
        }
        if($request->hasFile('image_png')){ 
            $extension = $request->file('image_png')->extension();
            $image_png = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_png')->storeAs('public/uploads/images/tags',$image_png);
        }else{
            $image_png=$request->input('image_png_old');
        }
        if($request->hasFile('image_jpg')){ 
            $extension = $request->file('image_jpg')->extension();
            $image_jpg = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_jpg')->storeAs('public/uploads/images/tags',$image_jpg);
        }else{
            $image_jpg=$request->input('image_jpg_old');
        }
        if($request->hasFile('image_webp')){ 
            $extension = $request->file('image_webp')->extension();
            $image_webp = $request->input('name').'_'.time().'_'.rand().'.'.$extension; 
            $path = $request->file('image_webp')->storeAs('public/uploads/images/tags',$image_webp);
        }else{
            $image_webp=$request->input('image_webp_old');
        }
       
        $image_tags = Image_tag::find($id);

        $image_tags->name = $request->input('name');
        $image_tags->slug = str_slug($request->input('slug'));
        $image_tags->banner = $banner;
        $image_tags->image_png = $image_png;
        $image_tags->image_jpg = $image_jpg;
        $image_tags->image_webp = $image_webp;
        $image_tags->alt = $request->input('alt');
        $image_tags->meta_title = $request->input('meta_title');
        $image_tags->meta_description= $request->input('meta_description');
        $image_tags->meta_keywords= $request->input('meta_keywords');
        $image_tags->description= $request->input('description');
        $image_tags->update();
         
        return redirect('admin/image-tags/')->with("success", $request->input('name')." Image Tag has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image_Tag  $image_Tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image_Tag $image_Tag,$id)
    {
        $image_tags = DB::table('image_tags')->where('id',$id)->delete(); 
        return redirect('admin/image-tags/')->with('success', 'image Tag has been deleted.');
    }
}
