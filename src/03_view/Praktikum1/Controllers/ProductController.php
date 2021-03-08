<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product1()
    {
        return view('product', [
            'nama' => 'OscarNurIslam',
            'status'=> 'Pelajar di  Polinema'
            ]);
    }
    function hello1()
    {
        return view('coba.hello', ['nama' => 'Oscar Nur Islam']);
    }
    // function StoryBooks()
    // {
    //     return redirect('https://www.educastudio.com/category/riri-story-books');
    // }
    // function KidSong()
    // {
    //     return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    // }
}
