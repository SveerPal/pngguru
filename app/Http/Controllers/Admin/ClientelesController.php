<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clientele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Validator;

class ClientelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienteles = DB::table('clienteles')->get();  
        return view('admin.clienteles.index',['clienteles' => $clienteles])->withTitle('Clienteles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clienteles.create')->withTitle('Create Clientele');
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
            $path = $request->file('image')->storeAs('public/uploads/clienteles',$image);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }
        $clientele = new Clientele;

        $clientele->name = $request->input('name');
        $clientele->link = $request->input('link');
        $clientele->image = $image;
        $clientele->alt = $request->input('alt');
        $clientele->save();
         
        return redirect('admin/clienteles/')->with('success', 'New clientele has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientele  $clientele
     * @return \Illuminate\Http\Response
     */
    public function show(Clientele $clientele,$id)
    {
        $clienteles = DB::table('clienteles')->where('id',$id)->first();  
        return view('admin.clienteles.view',['clienteles' => $clienteles])->withTitle('Clientele Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientele  $clientele
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientele $clientele,$id)
    {
        $clientelesdetails = DB::table('clienteles')->where('id',$id)->get();        
             
        return view('admin.clienteles.edit',['clientelesdetails'=>$clientelesdetails])->withTitle('Edit Clientele');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientele  $clientele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientele $clientele,$id)
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
            $path = $request->file('image')->storeAs('public/uploads/clienteles',$image);
           /// Setting::where('id', '=', 1)->update(['banner'=>$site_logo]);
        }
        else{
            $image=$request->input('image_old');
        }
        $clientele = Clientele::find($id);;

        $clientele->name = $request->input('name');
        $clientele->link = $request->input('link');
        $clientele->image = $image;
        $clientele->alt = $request->input('alt');
        $clientele->update();
         
        return redirect('admin/clienteles/')->with("success", $request->input('name')." clienteles has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientele  $clientele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientele $clientele,$id)
    {
        $clienteles = DB::table('clienteles')->where('id',$id)->delete(); 
        return redirect('admin/clienteles/')->with('success', 'Clienteles has been deleted.');
    }
}
