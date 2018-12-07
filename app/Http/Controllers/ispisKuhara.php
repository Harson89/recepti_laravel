<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\recieps;
use App\kategorije2;


class ispisKuhara extends Controller
{
    public function ispisKuhara()
    {
        $kuhari = User::all();
        return view('kuhari')->with('kuhari',$kuhari);
    }

    public function ispisZaOdabranog($id_kuhara)
    {
        $recepti = recieps::where('user_id',$id_kuhara)->get();
        return view('/kuharovi_recepti')->with('recepti',$recepti);
    }

}
