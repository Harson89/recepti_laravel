<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ispisKuhara extends Controller
{
    public function ispisKuhara()
    {
        $kuhari = User::all();

        return view('kuhari')->with('kuhari',$kuhari);
    }
}
