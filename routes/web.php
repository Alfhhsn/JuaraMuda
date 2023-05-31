<?php

use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/Login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/Login', [LoginController::class, 'dologin'])->name('dologin');

Route::get('/Register', [UserController::class, 'show'])->name('show')->middleware('guest');

Route::post('/Register', [UserController::class, 'simpandata'])->name('simpandata');

Route::get('/about', function () {
    return view('about');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/postingan', [PostController::class, 'index'])->name('index');

Route::get('/postingan/{id}', [PostController::class, 'show'])->name('show');

Route::get('/searchbeasiswa', [PostController::class, 'index'])->name('index');

Route::get('/searchlomba', function () {
    return view('searchlomba');
});

Route::get('/katamereka',  [FormPostController::class, 'create'])->name('create')->middleware('guest');

Route::post('/katamereka', [FormPostController::class, 'store']);

// Route::get('/katamereka/posts/checkSlug', [PostController::class, 'checkSlug'])->name('checkSlug');

// Route::resource('/katamereka/posts', PostController::class)->middleware('guest');

Route::get('check_slug', function () {
    $slug = SlugService::createSlug(App\Models\Post::class, 'slug', request('title'));
    return response()->json(['slug' => $slug]);
}); 

Route::post('/', function () {
    App\Models\Post::create(['title' => request('title')]);
    return redirect()->back();  
});