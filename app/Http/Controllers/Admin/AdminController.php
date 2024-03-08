<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }
    //Admin Login
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $validated = $request->validate([
                'email' => 'required|email',
                'password'=> 'required',
            ]);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message','Invalid Email or Password!');
            }  
        }
        return view('admin.login');
    }
    //Admin Logout
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
