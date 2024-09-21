<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class hargaController extends Controller
{
    public function index () {
        if(Auth::check()){
            $prices = Price::all();
            return view('admin.hargaSewa', ['priceList' => $prices]);
        }
      
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    
    }

    public function create() {
        
    }

    public function store(Request $request) {

        $prices = new Price;
        $prices->id_harga = $request->id_harga;
        $prices->harga_det = $request->harga_det;

        $prices->save();

        return redirect('/admin/input-price');
    }

    
    public function edit (Request $request, $id) {
        $prices = Price::findOrFail($id);
        return view('admin.edit-harga', ['priceList' => $prices]);
    }


    public function update (Request $request, $id) {
        $prices = Price::findOrFail($id);

        $prices->id_harga = $request->id_harga;
        $prices->harga_det = $request->harga_det;


        $prices->save();

        return redirect('admin/input-price');
    }


    
    public function delete($id){
        $prices = Price::findOrFail($id);
        return view('admin.delete-harga', ['priceList' => $prices]);
    }


    public function destroy($id){
        $prices = Price::findOrFail($id);
        $deletePosts = DB::table('prices')->where('id', $id)->delete();

        return redirect('/admin/input-price');
    }
}
