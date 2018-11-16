<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\User;
use Auth;


class mojiReceptiController extends Controller
{
    //Ispisuje recepte trenutno prijavljenog usera

    public function ispisMojihRecepata()
    {
    $id_usera = Auth::id();
    $recepti = recieps::where('user_id',$id_usera)->get();
    return view ('mojiRecepti')->with('recepti',$recepti);
    }
}
