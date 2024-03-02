<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticelsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [ AboutController::class,'about']);
Route::get('/artikel/{id}', [ArticelsController::class,'artikel']);

Route::get('/world', function () {
    return 'World';
});
// Route::get('/', function () {
//     return 'Selamat Datang';
// });
// Route::get('/about', function () {
//     return 'Nama : Fajar Bayu Kusuma <br>
//             NIM  : 2241720085';
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/posts/{postId}/comments/{commentId}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
// Route::get('/artikel/{id}', function
// ($id) {
//  return 'Halaman Artikerl dengan ID : '.$id;
// });

Route::get('/user/{name?}', function ($name='john') {
    return 'Nama saya '.$name;
});


Route::resource('photos', PhotoController::class);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Fajar']);
//     });
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Fajar Bayu']);
//     });

    Route::get('/greeting', [WelcomeController::class,
    'greeting']);