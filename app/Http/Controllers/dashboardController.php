<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Std_Knowledge;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index() {
        $post = Post::all();
        $postknow = Std_Knowledge::all();
        $postmess = Contact::all();
        // $posts = $post->count();
        return view('admin.dashboard', ['postList' => $post, 'knowList' => $postknow, 'contactList' => $postmess]);
    }
    

}
