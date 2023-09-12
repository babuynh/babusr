<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $blogPosts=BlogPost::all();
        return view('welcome',compact('blogPosts'));
    }

    public function userlist(){
        $users=User::all();
        return view('admin.userlist',compact('users'));
    }
}
