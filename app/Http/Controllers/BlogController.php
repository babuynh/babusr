<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();
        return view('admin.blog.index', compact('blogPosts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

       $user=Auth::user();
       
        $blogPost= new BlogPost();
        $blogPost->title=$request->title;
        $blogPost->content=$request->content;
        $blogPost->user_id=$user->id;
        $blogPost->save();

        return redirect()->route('blogs.index')->with('success', 'Blog post created successfully');
    }

    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        return view('blog.show', compact('blogPost'));
    }

    public function edit($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        $user = Auth::user();
       
        if ($user->role === 'Admin' || $user->id === $blogPost->user_id) {
            return view('admin.blog.edit', compact('blogPost'));
        }
    
        return redirect()->route('blogs.index')->with('error', 'You do not have permission to edit this blog post.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $blogPost = BlogPost::find($id);

       
        $blogPost->title = $request->title;
        $blogPost->content = $request->content;
        $blogPost->save();

        return redirect()->route('blogs.index')->with('success', 'Blog post updated successfully');
    }

    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);
        $user = Auth::user();
        if ($user->role === 'Admin' || $user->id === $blogPost->user_id) {
            $blogPost->delete();
            return redirect()->route('blogs.index')->with('success', 'Blog post deleted successfully');
        }
    
        return redirect()->route('blogs.index')->with('error', 'You do not have permission to delete this blog post.');
    }
}
