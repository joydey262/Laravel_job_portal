<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function checkAdminPassword(Request $request){
        $data = $request->all();
        if (Hash::check($data['current_password'],Auth::guard('admin')->user()->password)) {
            return "true";
        }else{
            return "false";
        }
    }

    public function updateAdminPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
                if($data['new_password']==$data['confirm_password']){
                   Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=> bcrypt($data['new_password'])]);
                    return redirect()->back()->with('success_message','Your password is Updated successfully!');
                }else{
                    return redirect()->back()->with('error_message','Passwords do not match!');
                }
            }else{
                return redirect()->back()->with('error_message','Your current password is Incorrect!');
            }
        }
        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.update-admin-password')->with(compact('adminDetails'));
    }

    public function updateAdminDetails(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
                'mobile' => 'required|numeric',
                'current_password' => 'required'
            ];
            $this->validate($request,$rules);
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
                Admin::where('id',Auth::guard('admin')->user()->id)->update(['name'=>$data['name'], 'mobile'=>$data['mobile']]);
                return redirect()->back()->with('success_message','Details updated successfully!');

            }else{
                return redirect()->back()->with('error_message','Enter the correct password to update details!');
            }
        }
        return view('admin.settings.update-admin-details');
    }

    public function updateEmployerDetails($slug){
        if($slug=="personal"){
            // code...
        }
        else if($slug=="institution"){

        }
        else if($slug=="banking"){

        }
        return view('admin.settings.update-employer-details')->with(compact('slug'));
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $validated = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('admin')->attempt([ 'email'=>$data['email'], 'password'=>$data['password'], 'status'=>1 ])){
                return redirect('admin/dashboard');
            }
            else{
                return redirect()->back()->with('error_message','Invalid Email or Wrong Password!');
            }
        }
        return view('admin.login');
    }

    public function logout(){
        Auth::guard('admin')->logout() ;
        return redirect('admin/login');
    }
}
