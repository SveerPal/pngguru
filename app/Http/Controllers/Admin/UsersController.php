<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = DB::table('users')->get();  
        return view('admin.users.index',['users' => $users])->withTitle('Users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create')->withTitle('Create User');
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
            'email'                     =>  'required|unique:users',
            'phone'                     =>  'required',
            /*'address'                   =>  'required',
            'city'                      =>  'required',
            'state'                     =>  'required',
            'country'                   =>  'required',
            'zipcode'                   =>  'required',*/
            
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('profile')){ 

            $extension = $request->file('profile')->extension();
            $image = $request->input('name').'.'.$extension;//            
            $path = $request->file('profile')->storeAs('public/uploads/users',$image);
           
        }
        $user = new User;
        $user->password=Hash::make($request->input('password'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');        
        $user->country = $request->input('country');
        $user->zipcode = $request->input('zipcode');
        $user->profile = $image;
        $user->save();
         
        return redirect('admin/users/')->with('success', 'New User has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $users = DB::table('users')->where('id',$id)->first();  
        return view('admin.users.view',['users' => $users])->withTitle('User Detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $usersdtl = DB::table('users')->where('id',$id)->get();        
             
        return view('admin.users.edit',['usersdtl'=>$usersdtl])->withTitle('Edit User');
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {
        $image="";
        $validator = Validator::make($request->all(), [            
           
            'name'                      =>  'required',
            'email'                     =>  'required|unique:users,email,'.$id,
            'phone'                     =>  'required',
            /*'address'                   =>  'required',
            'city'                      =>  'required',
            'state'                     =>  'required',
            'country'                   =>  'required',
            'zipcode'                   =>  'required',*/
            
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('profile')){ 

            $extension = $request->file('profile')->extension();
            $image = $request->input('name').'.'.$extension;//            
            $path = $request->file('profile')->storeAs('public/uploads/users',$image);
           
        }
        else{
            $image=$request->input('profile_old');
        }
        $user = User::find($id);;

        $user->password=Hash::make($request->input('password'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');        
        $user->country = $request->input('country');
        $user->zipcode = $request->input('zipcode');
        $user->profile = $image;
        $user->update();
         
        return redirect('admin/users/')->with("success", $request->input('name')." User has been updated.");
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
          $users = DB::table('users')->where('id',$id)->delete(); 
        return redirect('admin/users/')->with('success', 'User has been deleted.');
    }
}
