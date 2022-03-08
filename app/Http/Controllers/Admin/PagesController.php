<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

use Validator;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = DB::table('pages')->get();  
        return view('admin.pages.index',['pages' => $pages])->withTitle('Pages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $pages = DB::table('pages')->get();
        return view('admin.pages.create',['parentPage' => $pages])->withTitle('Create Page');
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
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:pages',
            'slug'                      =>  'required|unique:pages',            
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('banner')){ 

            $extension = $request->file('banner')->extension();
            $banner = $request->input('name').'.'.$extension;//$request->file('site_logo')->getClientOriginalName();               
            $path = $request->file('banner')->storeAs('public/uploads/banner',$banner);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }
        $page = new Page;

        $page->name = $request->input('name');
        $page->slug = str_slug($request->input('slug'));
        $page->parent = $request->input('parent');
        $page->banner = $banner;
        $page->alt = $request->input('alt');
        $page->meta_title = $request->input('meta_title');
        $page->meta_description= $request->input('meta_description');
        $page->description= $request->input('description');
        $page->save();
         
        return redirect('admin/pages/')->with('success', 'New page has been created.');
        //return back()->with('success', 'New Page has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = DB::table('pages')->where('id',$id)->first();  
        return view('admin.pages.view',['pages' => $pages])->withTitle('Pages Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagesdetail = DB::table('pages')->where('id',$id)->get();        
        $parentPage = DB::table('pages')->get();        
        return view('admin.pages.edit',['parentPage' => $parentPage,'pagesdetail'=>$pagesdetail])->withTitle('Edit Page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page,$id)
    {
        
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:pages,name,'.$id,
            'slug'                      =>  'required|unique:pages,slug,'.$id,            
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('banner')){ 

            $extension = $request->file('banner')->extension();
            $banner = $request->input('name').'.'.$extension;//$request->file('site_logo')->getClientOriginalName();               
            $path = $request->file('banner')->storeAs('public/uploads/banner',$banner);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }else{
            $banner=$request->input('banner_old');
        }
        //$page = new Page;
        $page = Page::find($id);

        $page->name = $request->input('name');
        $page->slug = str_slug($request->input('slug'));
        $page->parent = $request->input('parent');
        $page->banner = $banner;
        $page->alt = $request->input('alt');
        $page->meta_title = $request->input('meta_title');
        $page->meta_description= $request->input('meta_description');
        $page->description= $request->input('description');
        $page->update();
         
        return redirect('admin/pages/')->with("success", $request->input('name')." page has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages = DB::table('pages')->where('id',$id)->delete(); 
       // $user = User::where('id', $id)->firstorfail()->delete();
        return redirect('admin/pages/')->with('success', 'Page has been deleted.');
    }
}
