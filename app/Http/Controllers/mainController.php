<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Std_Knowledge;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index () {
        // $contact = Contact::get();
        $post = Post::all();
        $post = Post::orderBy('updated_at', 'DESC')->get();
        return view('index', ['postList' => $post]);
    }

    public function std_knowledge () {
        // $contact = Contact::get();
        $post = Std_Knowledge::all();
        $post = Std_Knowledge::orderBy('updated_at', 'DESC')->get();
        return view('knowledge', ['stdKnowList' => $post]);
    }
}
