<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\kategorije2;

class receptiController extends Controller
{

    //Funkcija za ispis svih recepata

    public function ispisRecepata()
    {
     $recepti = recieps::all();

     return view('recepti')->with('recepti',$recepti);
    }



}

