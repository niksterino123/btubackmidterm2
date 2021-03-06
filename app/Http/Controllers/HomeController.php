<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Blogtype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogtypes = Blogtype::get();
        $posts = Post::get();
        return view('home', compact(['blogtypes','posts']));
    }
    public function qwe() {
        $posts = Post::get();
        return view('welcome', compact('posts'));

    }

}
