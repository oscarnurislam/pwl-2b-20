<?php

use Illuminate\Support\Facades\Route;
 // use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
 use App\Http\Controllers\ArticleController;

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
 Route::get('/articles', [PageController::class, 'articles']);
// Route::get('/home', [HomeController::class, 'home']);
 Route::get('/article', [ArticleController::class, 'article']);

