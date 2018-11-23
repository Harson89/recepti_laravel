<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategorije2;

class kategorijeController extends Controller
{
    public function ispisKategorija()
    {
    $kategorije = kategorije2::all();
    return view('kategorije')->with('kategorije',$kategorije);
    }


}


