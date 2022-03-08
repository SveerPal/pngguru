<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Validator;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = DB::table('sliders')->get();  
        return view('admin.sliders.index',['sliders' => $sliders])->withTitle('Sliders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.sliders.create')->withTitle('Create Slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $image="";
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:sliders',
            'link'                =>  'nullable|url',            
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('image')){ 

            $extension = $request->file('image')->extension();
            $image = $request->input('name').'.'.$extension;//$request->file('site_logo')->getClientOriginalName();               
            $path = $request->file('image')->storeAs('public/uploads/sliders',$image);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }
        $slider = new Slider;

        $slider->name = $request->input('name');
        $slider->heading_first = $request->input('heading_first');
        $slider->heading_second = $request->input('heading_second');
        $slider->heading_third = $request->input('heading_third');
        $slider->image = $image;
        $slider->alt = $request->input('alt');
        $slider->link = $request->input('link');
        $slider->link_lable= $request->input('link_lable');
        $slider->save();
         
        return redirect('admin/sliders/')->with('success', 'New slider has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sliders = DB::table('sliders')->where('id',$id)->first();  
        return view('admin.sliders.view',['sliders' => $sliders])->withTitle('Slider Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slidersdetails = DB::table('sliders')->where('id',$id)->get();        
             
        return view('admin.sliders.edit',['slidersdetails'=>$slidersdetails])->withTitle('Edit Slider');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider,$id)
    {
        
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required|unique:sliders,name,'.$id,
            'link'                      =>  'nullable|url',                
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('image')){ 

            $extension = $request->file('image')->extension();
            $image = $request->input('name').'.'.$extension;             
            $path = $request->file('image')->storeAs('public/uploads/sliders',$image);
        }else{
            $image=$request->input('image_old');
        }
        $slider = Slider::find($id);

        $slider->name = $request->input('name');
        $slider->heading_first = $request->input('heading_first');
        $slider->heading_second = $request->input('heading_second');
        $slider->heading_third = $request->input('heading_third');
        $slider->image = $image;
        $slider->alt = $request->input('alt');
        $slider->link = $request->input('link');
        $slider->link_lable= $request->input('link_lable');
        $slider->update();
         
        return redirect('admin/sliders/')->with("success", $request->input('name')." slider has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = DB::table('sliders')->where('id',$id)->delete(); 
       // $user = User::where('id', $id)->firstorfail()->delete();
        return redirect('admin/sliders/')->with('success', 'Slider has been deleted.');
    }
}
