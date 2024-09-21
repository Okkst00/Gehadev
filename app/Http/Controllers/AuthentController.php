<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Factor;
use App\Models\Post;
use App\Models\Std_Knowledge;
use App\Models\Price;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthentController extends Controller
{
     public function index() {
        return view('admin.index');
    }  
      
    public function Login(Request $request) {
       $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin/dashboard');
        }
 
       return redirect("admin/login")->withErrors('Login details are not valid');
   }


    public function registration() {
        return view('admin.signup');
    }
      
    public function customRegistration(Request $request) {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("admin/dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data) {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard() {
        if(Auth::check()){
        $post = Post::all();
         // $post = Post::find($id);
        // $admin = User::all();
        $postknow = Std_Knowledge::all();
        $postmess = Contact::all();
        $factors = Factor::all();
        $prices = Price::all();
        // $posts = $post->count();
        return view('admin.dashboard', ['postList' => $post, 'knowList' => $postknow, 'contactList' => $postmess, 'priceList' => $prices, 'factorList' => $factors]);
        }
  
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect('admin/login');
    }
}

