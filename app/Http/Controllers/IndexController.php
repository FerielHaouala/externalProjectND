<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = blog::orderBy('id', 'desc')->paginate(6);
        return view('blogs.neurodata', compact('blogs'));
    }
}
