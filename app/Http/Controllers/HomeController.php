<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage()
    {
        $posts = Post::all();
        $admins = Admin::all();
        return view('home.homepage', compact('posts','admins'));

    }
}
