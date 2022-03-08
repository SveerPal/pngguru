<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Validator;


class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = DB::table('testimonials')->get();  
        return view('admin.testimonials.index',['testimonials' => $testimonials])->withTitle('Testimonials');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create')->withTitle('Create Slider');
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
           
            'name'                      =>  'required',
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('image')){ 

            $extension = $request->file('image')->extension();
            $image = $request->input('name').'.'.$extension;//$request->file('site_logo')->getClientOriginalName();               
            $path = $request->file('image')->storeAs('public/uploads/testimonials',$image);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }
        $testimonial = new Testimonial;

        $testimonial->name = $request->input('name');
        $testimonial->designation = $request->input('designation');
        $testimonial->comment = $request->input('comment');
        $testimonial->image = $image;
        $testimonial->alt = $request->input('alt');
        $testimonial->save();
         
        return redirect('admin/testimonials/')->with('success', 'New testimonial has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial, $id)
    {
       
        $testimonials = DB::table('testimonials')->where('id',$id)->first();  
        return view('admin.testimonials.view',['testimonials' => $testimonials])->withTitle('Testimonial Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial,$id)
    {
        $testimonialsdetails = DB::table('testimonials')->where('id',$id)->get();        
             
        return view('admin.testimonials.edit',['testimonialsdetails'=>$testimonialsdetails])->withTitle('Edit Testimonial');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial,$id)
    {
        
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required',
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('image')){ 

            $extension = $request->file('image')->extension();
            $image = $request->input('name').'.'.$extension;//$request->file('site_logo')->getClientOriginalName();               
            $path = $request->file('image')->storeAs('public/uploads/testimonials',$image);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }
        else{
            $image=$request->input('image_old');
        }
        $testimonial = Testimonial::find($id);;

        $testimonial->name = $request->input('name');
        $testimonial->designation = $request->input('designation');
        $testimonial->comment = $request->input('comment');
        $testimonial->image = $image;
        $testimonial->alt = $request->input('alt');
        $testimonial->update();
         
        return redirect('admin/testimonials/')->with("success", $request->input('name')." testimonial has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial,$id)
    {
        $testimonials = DB::table('testimonials')->where('id',$id)->delete(); 
        return redirect('admin/testimonials/')->with('success', 'Testimonial has been deleted.');
    }
}
