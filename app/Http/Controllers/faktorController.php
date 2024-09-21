<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class faktorController extends Controller
{
    public function index () {
        if(Auth::check()){
            $factors = Factor::all();
            // $factors = Factor::orderBy('updated_at', 'ASC')->get();
            return view('admin.faktor', ['factorList' => $factors]);
        }
      
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    
    }

    public function create() {
        
    }

    public function store(Request $request) {

        $factors = new Factor;
        $factors->id_faktor = $request->id_faktor;
        $factors->faktor_det = $request->faktor_det;
        $factors->faktor_quest = $request->faktor_quest;

        $factors->save();

        return redirect('/admin/input-faktor');
    }

    
    public function edit (Request $request, $id) {
        $factors = Factor::findOrFail($id);
        return view('admin.edit-faktor', ['factorList' => $factors]);
    }


    public function update (Request $request, $id) {
        $factors = Factor::findOrFail($id);
        
        $factors->id_faktor = $request->id_faktor;
        $factors->faktor_det = $request->faktor_det;
        $factors->faktor_quest = $request->faktor_quest;


        $factors->save();

        return redirect('admin/input-faktor');
    }


    
    public function delete($id){
        $factors = Factor::findOrFail($id);
        return view('admin.delete-faktor', ['factorList' => $factors]);
    }


    public function destroy($id){
        $factors = Factor::findOrFail($id);
        $deletePosts = DB::table('factors')->where('id', $id)->delete();

        return redirect('/admin/input-faktor');
    }
}
