<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\kategorije2;

class receptiKategorijeController extends Controller
{
     //Funkcija za ispis recepata po kategorijama

     public function receptiPoKategoriji($kategorija_id)
     {
         $receptiKategorije = recieps::where('kategorija_id',$kategorija_id)->get();
         return view('receptiKategorije')->with('receptiKategorije',$receptiKategorije);
     }

}
