<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactWebController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
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




    //Praktikum 2 Kelompok Pertemuan 3(view)

    Route::get('/home', function(){
        return view('home');
    });
    Route::get('/contact', function(){
        return view('contact');
    });
    Route::get('/product', function(){
        return view('product');
    });
    Route::get('/about-us', function(){
        return view('about-us');
    });
    Route::get('/news', function(){
        return view('news');
    });
    Route::get('/program', function(){
        return view('program');
    });
    Route::get('/downloadsites', function(){
        return view('downloadsites');
    });
    Route::get('/templateusage', function(){
        return view('templateusage');
    });
    Route::get('/newvision','NewvisionController@index');
    
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
 
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
 
});
Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', 'ProductController');