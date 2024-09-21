<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class contactsController extends Controller
{
    public function index () {
        // $contact = Contact::get();
        if(Auth::check()){
            $contact = Contact::all();
            $contact = Contact::orderBy('updated_at', 'DESC')->get();
            return view('admin.contacts', ['contactList' => $contact]);
        }
      
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    
    }

    public function create() {
        
    }

    public function store(Request $request) {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        if ($contact) {
            Session::flash('status', 'success');
            Session::flash('message', 'berhasil mengirim pesan');
        }

        return redirect('/');
    }

    public function delete($id){
        $contact = Contact::findOrFail($id);
        return view('admin.delete-contacts', ['contactList' => $contact]);
    }


    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $deleteContacts = DB::table('contacts')->where('id', $id)->delete();

        return redirect('/admin/contacts');
    }

    
    // public function destroy(Request $request) {
    //     $contact = new Contact;
    //     $contact::findOrFail($request->id);
    //     $contact->delete();

    //     return redirect('/admin/contacts');
    // }

}
