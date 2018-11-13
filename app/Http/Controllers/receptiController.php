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

    //Funkcija za ispis recepata po kategorijama

    public function receptiPoKategoriji($kategorija_id)
    {
        $receptiKategorije = recieps::where('kategorija_id',$kategorija_id)->get();

        return view('receptiKategorije')->with('receptiKategorije',$receptiKategorije);
    }


}

