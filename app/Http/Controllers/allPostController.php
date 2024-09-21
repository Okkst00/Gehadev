<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class allPostController extends Controller
{
    public function index () {
        // $contact = Contact::get();
        $post = Post::all();
        $post = Post::orderBy('updated_at', 'DESC')->get();
        return view('allposts', ['postList' => $post]);
    }

    public function detail ($slug) {
        // $post = Post::find($id);
        $post = Post::where('slug', $slug)->first();
        return view('detail-posts', ['postList' => $post]);
    }

    // public function show ($slug) {
    //     $post = Post::find($slug);
    // }
}
