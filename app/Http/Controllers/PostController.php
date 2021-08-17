<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::paginate(config('app.posts'));
        // var_dump($posts);
        return view('index', ['posts' => $posts]);
    }
}
