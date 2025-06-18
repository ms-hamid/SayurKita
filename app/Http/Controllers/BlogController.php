<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        $comments = Comment::with('user', 'replies.user')
            ->where('target_type', 'blog')
            ->where('blog_id', $blog->blog_id)
            ->whereNull('parent_id')
            ->latest()
            ->get();

        $related = $blog->related();

        return view('pages.blog', compact('blog', 'comments', 'related'));
    }

    public function index()
    {
    $blogs = Blog::latest()->paginate(6); // atau ->get() jika tidak ingin pagination
    return view('pages.list_blog', compact('blogs'));
    }

    public function storeComment(Request $request, $id)
    { 
    $request->validate([
        'content' => 'required|string|max:1000',
    ]);

    Comment::create([
        'content' => $request->input('content'),
        'user_id' => 0, // guest
        'target_type' => 'blog',
        'blog_id' => $id,
        'product_id' => 0,
        'parent_id' => null,
    ]);

    return redirect()->back()->with('success', 'Komentar berhasil dikirim.');
    }
}
