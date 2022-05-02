<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;


class BlogsController extends Controller
{

    public function store(Request $request)
    {
        $content = $_POST['content'];
        $title = $_POST['title'];
        $this->middleware('auth');
        $data = request()->validate([
            'industry_option' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        ]);
        $imagePath = request('image')->store('uploads', 'public');

        $destinationPath = 'storage/uploads';
        $request->file('image')->move($destinationPath, $request->file('image')->getClientOriginalName());
        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 500);
        // $image = Image::make($request->file('image')->store('uploads', 'public'));
        // $image = Image::make("storage/uploads/{$imagePath}")->fit(1200, 700);
       
       



        //    $image->save();

        Blog::create(
            [
                'title' => $title,
                'content' => $content,
                'industry_option' => $data['industry_option'],
                'image' => $destinationPath.'/'. $request->file('image')->getClientOriginalName(),
            ]
        );
        $id = auth()->user()->id;
        return redirect('/');
    }

    public function show($blog)
    {
        $blog = blog::find($blog);
        return view('blogs.show', compact('blog'));
    }

    public function index()
    {
        $blogs = blog::orderBy('id', 'desc')->paginate(6);
        return view('blogs.homePage', compact('blogs'));
    }
}
