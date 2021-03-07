<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController; 
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
 //use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function (){
    return view('coba.hello', ['nim' => '1941720069'])
    ;});
//Praktikum1
// Route::get('/about', function () {
//     return 'Nama: Oscar Nur Islam<br>
//             NIM: 1941720069<br>
//     ';
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Articles ' . $id;
// });
// Route::get('/posts/{post}/comments/{comment}', function (
//     $postId,
//     $commentId
// ) {
//     //
// });

// //Praktikum2
 //Route::get('/home', [PageController::class, 'home']);
 //Route::get('/about', [PageController::class, 'about']);
 //Route::get('/articles', [PageController::class, 'articles']);
// Route::get('/home', [HomeController::class, 'home']);
// Route::get('/article', [ArticleController::class, 'article']);

Route::get('/latihan-template',function(){
    return view('child');
});
Route::redirect('/gaslor', 'https://www.detik.com/tag/makanan-enak');

Route::get('/halaman-awal', function (){
    return view('home')
    ;});
  
    //cara memanggil di web localhost8000:product/product1
    Route::prefix('/product') -> group(function(){
        Route::get('/product1', [ProductController::class, 'product1']);
        Route::get('/hello1', [ProductController::class, 'hello1']);
    });
    //cara memanggil di web localhost8000:news/(angka terserah)
    Route::get('/news/{id}', function ($id) {
        return view('news').$id;
    });
    Route::prefix('/program') -> group(function(){
        Route::get('/program1', [ProgramController::class, 'program1']);
    });
    Route::get('/about-us', function () {
        return view('about-us');
    });
    //cara memanggil di web localhost:8000/contact
    Route::resource('contact', ContactController::class)->only([
        'index'
       ]);