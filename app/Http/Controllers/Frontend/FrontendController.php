<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;



class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(5);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('posts', 'categories'));
    }
}
