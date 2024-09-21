<?php

namespace App\Http\Controllers;

use App\Models\Std_Knowledge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class std_KnowledgeController extends Controller
{
    public function index () {
        if(Auth::check()){
            $post = Std_Knowledge::all();
            $post = Std_Knowledge::orderBy('updated_at', 'DESC')->get();
            return view('admin.knowledge', ['stdKnowList' => $post]);
        }
      
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    
    }


    
    public function edit (Request $request, $id) {
        $post = Std_Knowledge::findOrFail($id);
        return view('admin.edit-std-know', ['posts' => $post]);
    }


    public function update (Request $request, $id) {
        $post = Std_Knowledge::findOrFail($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $Newtitle = '';

        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $Newtitle =  date('dmYHi').'.'.$extension;
            $request->file('image')->storeAs('image', $Newtitle);
            
            $post->image = $request->file('image')->storeAs('image', $Newtitle);
        }


        $post->save();

        return redirect('admin/knowledge');
    }
    
    public function store(Request $request) {
        // dd($request->all());

        $Newtitle = '';

        $post = new Std_Knowledge;
        $post->title = $request->title;
        $post->content = $request->content;

        $extension = $request->file('image')->getClientOriginalExtension();
        $Newtitle =  date('dmYHi').'.'.$extension;
        // $Newtitle = now()->timestamp.'.'.$extension;
        $request->file('image')->storeAs('image', $Newtitle);
        
        $post->image = $request->file('image')->storeAs('image', $Newtitle);
        // return $request->file('image')->storeAs('image', $Newtitle);

        $post->save();

        // if ($post) {
        //     Session::flash('status', 'success');
        //     Session::flash('message', 'berhasil mengirim pesan');
        // }

        return redirect('/admin/knowledge');
    }


    
    public function create() {
        
    }
    
    public function delete($id){
        $post = Std_Knowledge::findOrFail($id);
        return view('admin.delete-std_knowledge', ['stdKnowList' => $post]);
    }


    public function destroy($id){
        $post = Std_Knowledge::findOrFail($id);
        $deletePosts = DB::table('std_knowledges')->where('id', $id)->delete();

        return redirect('/admin/knowledge');
    }

}
