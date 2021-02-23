<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
       return '<p>Nama: Oscar Nur Islam</p><br>
               <p>NIM: 1941720069</p><br>';
    }
}
