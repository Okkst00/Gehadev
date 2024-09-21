<?php

use App\Http\Controllers\allPostController;
use App\Http\Controllers\AuthentController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\std_KnowledgeController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\hargaController;
use App\Http\Controllers\faktorController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AturanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ObatPenyakitController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SistemController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('admin/dashboard', [AuthentController::class, 'dashboard']); 
// Route::get('admin/login', [AuthentController::class, 'index'])->name('login');
// Route::post('admin/custom-login', [AuthentController::class, 'Login'])->name('login.custom'); 
// Route::get('admin/registration', [AuthentController::class, 'registration'])->name('register-user');
// Route::post('admin/custom-registration', [AuthentController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('admin/signout', [AuthentController::class, 'signOut'])->name('signout');

Route::get('/regist-user', function () {
    return view('registUser');
});


// Route::get('/', [mainController::class, 'index']);
Route::resource('/', mainController::class);
Route::post('/', [contactsController::class, 'store']);


Route::get('/posts/{slug}', [allPostController::class, 'detail']);

Route::get('/all-posts', [allPostController::class, 'index']);
// Route::get('/all-posts', function () {
//     return view('allposts');
// });

Route::get('/knowledge', [mainController::class, 'std_knowledge']);

// Route::resource('/admin/artikel', postsController::class);
Route::delete('/admin/delete-artikel/{id}', [postsController::class, 'delete']);
Route::delete('/admin/destroy-artikel/{id}', [postsController::class, 'destroy']);

// Route::resource('/admin/knowledge', std_KnowledgeController::class);
Route::get('/admin/edit-std_knowledge/{id}', [std_KnowledgeController::class, 'edit']);
Route::delete('/admin/delete-std_knowledge/{id}', [std_KnowledgeController::class, 'delete']);
Route::delete('/admin/destroy-std_knowledge/{id}', [std_KnowledgeController::class, 'destroy']);


Route::delete('/admin/delete-contacts/{id}', [contactsController::class, 'delete']);
Route::delete('/admin/destroy-contacts/{id}', [contactsController::class, 'destroy']);



// Route::get('/', [HomeController::class,'index']);
Route::get('/list-soal',[TesController::class,'index']);
Route::get('/report',[ReportController::class,'index']);
Route::get('/admin/login',[AuthController::class,'index']);
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard',[HomeController::class,'dashboard']);
    Route::get('/admin/penyakit',[PenyakitController::class,'index']);
    Route::get('/admin/gejala',[GejalaController::class,'index']);
    Route::get('/admin/obat',[ObatController::class,'index']);
    Route::get('/admin/aturan',[AturanController::class,'index']);
    Route::get('/admin/atur-obat',[ObatPenyakitController::class,'index']);
    Route::get('/admin/report',[ReportController::class,'dashboard']);
    Route::get('/admin/user',[UserController::class,'index']);
    Route::get('/admin/admin',[AdminController::class,'index']);
    Route::get('/admin/artikel', [postsController::class, 'index']);
    Route::post('/admin/artikel', [postsController::class, 'store']);
    Route::put('/admin/artikel/{id}', [postsController::class, 'update']);
    Route::get('/admin/edit-artikel/{id}', [postsController::class, 'edit']);
    Route::get('/admin/knowledge', [std_KnowledgeController::class, 'index']);
    Route::post('/admin/knowledge', [std_KnowledgeController::class, 'store']);
    Route::put('/admin/knowledge/{id}', [std_KnowledgeController::class, 'update']);
    Route::resource('/admin/contacts', contactsController::class);
});

Route::get('/get-obat',[ObatController::class,'get']);
Route::get('/get-penyakit',[PenyakitController::class,'get']);
Route::get('/get-gejala',[GejalaController::class,'get']);
Route::get('/get-aturan/{id_penyakit}',[AturanController::class,'get']);
Route::get('/get-obat-penyakit/{id_penyakit}',[ObatPenyakitController::class,'get']);
Route::get('/get-report/{user_id}',[ReportController::class,'get']);
Route::get('/get-obat-penyakit-relation/{id_penyakit}',[ObatPenyakitController::class,'get_relation']);

Route::post('/penyakit',[PenyakitController::class,'store'])->name('store.penyakit');
Route::post('/gejala',[GejalaController::class,'store'])->name('store.gejala');
Route::post('/obat',[ObatController::class,'store'])->name('store.obat');
Route::post('/obat-penyakit',[ObatPenyakitController::class,'store']);
Route::post('/aturan',[AturanController::class,'store']);
Route::post('/sistem',[SistemController::class,'sistem']);
Route::post('/auth-user',[AuthController::class,'auth_user']);
Route::post('/user',[UserController::class,'store']);
Route::post('/admin',[AdminController::class,'store']);
Route::post('/login-admin',[AuthController::class,'auth_admin'])->name('login.admin');
Route::get('/logout',[AuthController::class,'logout']);

Route::put('/gejala',[GejalaController::class,'update'])->name('update.gejala');
Route::put('/obat',[ObatController::class,'update'])->name('update.obat');
Route::put('/penyakit',[PenyakitController::class,'update'])->name('update.penyakit');
Route::put('/user',[UserController::class,'update'])->name('update.user');
Route::put('/admin',[AdminController::class,'update']);

Route::delete('/gejala/{id}',[GejalaController::class,'delete'])->name('delete.gejala');
Route::delete('/obat/{id}',[ObatController::class,'delete'])->name('delete.obat');
Route::delete('/penyakit/{id}',[PenyakitController::class,'delete'])->name('delete.penyakit');
Route::delete('/user/{id}',[UserController::class,'delete']);
Route::delete('/admin/{id}',[AdminController::class,'delete']);


// Route::get('/option', function () {
//     return view('option');
// });

// Route::get('/cek-level', function () {
//     return view('get-level');
// });

// Route::get('/cek-price', function () {
//     return view('get-price');
// });

// Route::get('/posts', function () {
//     return view('detail-posts');
// });

// Route::get('/admin/edit', function () {
//     return view('admin.edit');
// });


// Route::get('/results-level', function () {
//     return view('resultlvl');
// });

// Route::get('/results-price', function () {
//     return view('resultprice');
// });

// Route::get('/admin/cek-level', function () {
//     return view('admin.cek-level');
// });

// Route::get('/admin/cek-price', function () {
//     return view('admin.cek-price');
// });


// Route::get('admin/input-diagnosa', function () {
//     return view('admin.inputDiagnosa');
// });

// Route::get('admin/input-gejala', function () {
//     return view('admin.inputGejala');
// });

// Route::get('admin/input-obat', function () {
//     return view('admin.inputObat');
// });

// Route::get('admin/atur-aturan', function () {
//     return view('admin.aturRule');
// });

// Route::get('admin/atur-obat', function () {
//     return view('admin.aturObat');
// });

// Route::get('admin/data-report', function () {
//     return view('admin.dataReport');
// });

// Route::get('admin/data-user', function () {
//     return view('admin.dataUser');
// });

// Route::get('admin/data-admin', function () {
//     return view('admin.dataAdmin');
// });

// Route::get('/admin', function () {
//     return view('admin.index');
// });

// Route::get('/admin/signIn', function () {
//     return view('admin.index');
// });

// Route::get('/admin/signUp', function () {
//     return view('admin.signup');
// });

// Route::get('/admin/dashboard', [dashboardController::class, 'index']);

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });



// Route::get('/admin/artikel', function () {
//     return view('admin.articles');
// });



// Route::get('/admin/knowledge', function () {
//     return view('admin.knowledge');
// });


// Route::get('/admin/contacts/{id}', [contactsController::class, 'delete']);
// Route::get('/admin/contacts', [contactsController::class, 'index']);


// return view base knowledge
// Route::resource('/admin/contacts', contactsController::class);


/* Route hanya untuk pemanggilan routing atau endpoint, jadi bukan view */

// Route::get('/admin/contacts', function () {
//     return view('admin.contacts');
// });


// Route::get('/admin/input-price', function () {
//     return view('admin.hargaSewa');
// });

// Route::get('/admin/input-faktor', function () {
//     return view('admin.faktor');
// });




// Route::get('/admin/input-rule', function () {
//     return view('admin.rule');
// });

// Route::get('/admin/input-base-knowledge', function () {
//     return view('admin.baseKnowledge');
// });

// Route::get('/admin/input-price-tier-D', function () {
//     return view('admin.price_D');
// });


// Route::get('/admin/input-price', [hargaController::class, 'index']);
// Route::post('/admin/input-price', [hargaController::class, 'store']);
// Route::put('/admin/input-price/{id}', [hargaController::class, 'update']);
// Route::get('/admin/edit-price/{id}', [hargaController::class, 'edit']);
// Route::delete('/admin/delete-price/{id}', [hargaController::class, 'delete']);
// Route::delete('/admin/destroy-price/{id}', [hargaController::class, 'destroy']);

// Route::get('/admin/input-faktor', [faktorController::class, 'index']);
// Route::post('/admin/input-faktor', [faktorController::class, 'store']);
// Route::put('/admin/input-faktor/{id}', [faktorController::class, 'update']);
// Route::get('/admin/edit-faktor/{id}', [faktorController::class, 'edit']);
// Route::delete('/admin/delete-faktor/{id}', [faktorController::class, 'delete']);
// Route::delete('/admin/destroy-faktor/{id}', [faktorController::class, 'destroy']);