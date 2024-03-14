<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login(){
        if(Auth::id()){
            $userStatus = Auth::user()->status;
            if($userStatus == 1){
                return view("dashboard");
            }else{
                return view("auth.login");
            }
        }
    }
    public function homepage()
    {
        $posts = Post::where('status','=',1)->orderBy('id','desc')->get();
        $admins = Admin::all();
        return view('home.homepage', compact('posts','admins'));

    }
    public function eventRegister(){
        return view('home.event_registration');
    }
}
