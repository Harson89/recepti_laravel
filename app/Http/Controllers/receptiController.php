<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\kategorije2;
use App\User;

class receptiController extends Controller
{

    //Funkcija za ispis svih recepata

    public function ispisRecepata()
    {
     $recepti = recieps::all();

     return view('recepti')->with('recepti',$recepti);
    }



    public function edit($id)

    {
         $post = recieps::find($id);
         return view ('/mojiRecepti');
    }



    public function pojedinacniPrikaz($zaPrikaz)
{

    $trenutniRecepat = recieps::where('id',$zaPrikaz)->get();

    return view ('/pojedinacanRecept')->with('ovajRecept', $trenutniRecepat);

}


}

