<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Admin;
use Illuminate\Http\UploadedFile;
use App\Traits\UploadAble;

use Validator;


class SettingController extends Controller
{
	use UploadAble;
    /**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
	    //$this->setPageTitle('Settings', 'Manage Settings');
	    return view('admin.settings.index')->withTitle('Manage Settings');
	}
	/**
	 * @param Request $request
	 */
	public function update(Request $request)
	{
		/*if($request->hasFile('site_logo')){ 

            $extension = $request->file('site_logo')->extension();
            $site_logo = 'logo.'.$extension;//$request->file('site_logo')->getClientOriginalName();       
            $path = $request->file('site_logo')->storeAs('public/uploads/logo','logo.'.$extension);
            Setting::where('id', '=', 1)->update(['site_logo'=>$site_logo]);
        }

        if($request->hasFile('site_favicon')){ 
            $extension = $request->file('site_favicon')->extension();
            $site_favicon ='favicon.'.$extension;// $request->file('site_favicon')->getClientOriginalName();       
            $path = $request->file('site_favicon')->storeAs('public/uploads/logo','favicon.'.$extension);
            Setting::where('id', '=', 1)->update(['site_favicon'=>$site_favicon]);
        }*/
		if ($request->has('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

	        if (config('settings.site_logo') != null) {
	            $this->deleteOne(config('settings.site_logo'));
	        }
	        $logo = $this->uploadOne($request->file('site_logo'), 'img');
	        Setting::set('site_logo', $logo);

    	} elseif ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

	        if (config('settings.site_favicon') != null) {
	            $this->deleteOne(config('settings.site_favicon'));
	        }
	        $favicon = $this->uploadOne($request->file('site_favicon'), 'img');
	        Setting::set('site_favicon', $favicon);

    	} else {

	        $keys = $request->except('_token');

	        foreach ($keys as $key => $value)
	        {
	            Setting::set($key, $value);
	        }
	    }
	    return back()->with('success', 'Setting has been updated.');
	}
	
	public function editpassword(){
	    return view('admin.settings.password')->withTitle('Update Password');
	}
	public function updatepassword(Request $request,$id){
	    
	     $validator = Validator::make($request->all(), [            
           
             'password' => 'required|min:6'           
            
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $admin = Admin::find($id);

        $admin->password = bcrypt($request->input('password'));

        $admin->update();
         
        return redirect('admin/password/')->with("success", "Password has been updated.");
	    
	}
}
