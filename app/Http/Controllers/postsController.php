<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class postsController extends Controller
{
    public function index () {
        // $contact = Contact::get();
        if(Auth::check()){
            $post = Post::all();
            $post = Post::orderBy('updated_at', 'DESC')->get();
            return view('admin.articles', ['postList' => $post]);
        }
      
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function edit (Request $request, $id) {
        $post = Post::findOrFail($id);
        return view('admin.edit-articles', ['posts' => $post]);
    }

    public function update (Request $request, $id) {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $Newtitle = '';

        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $Newtitle =  date('dmYHi').'.'.$extension;
            $request->file('image')->storeAs('image', $Newtitle);
            
            $post->image = $request->file('image')->storeAs('image', $Newtitle);
        }

        //update with no change default name file
        // if($request->file('image')) {
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     // $Newtitle = now()->timestamp.'.'.$extension;
        //     $request->file('image')->storeAs('image', $extension);
            
        //     $post->image = $request->file('image')->storeAs('image', $extension);
        // }

        $post->save();

        return redirect('admin/artikel');
    }



    public function create() {
        
    }



    public function store(Request $request) {
        // dd($request->all());

        $Newtitle = '';

        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $extension = $request->file('image')->getClientOriginalExtension();
        $Newtitle =  date('dmYHi').'.'.$extension;
        $request->file('image')->storeAs('image', $Newtitle);
        
        $post->image = $request->file('image')->storeAs('image', $Newtitle);
        
        // $post->image = $request->title.'-'.now()->timestamp.'.'.$extension;
        // return $request->file('image')->storeAs('image', $Newtitle);

        // $post->image = $request->file('image')->store('image');

        $post->save();

        // if ($post) {
        //     Session::flash('status', 'success');
        //     Session::flash('message', 'berhasil mengirim pesan');
        // }

        return redirect('/admin/artikel');
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        return view('admin.delete-articles', ['postList' => $post]);
    }


    public function destroy($id){
        $post = Post::findOrFail($id);
        $deletePosts = DB::table('posts')->where('id', $id)->delete();

        return redirect('/admin/artikel');
    }


}
