<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;

class receptiController extends Controller
{
    public function ipisRecepata()
    {
     $recepti = recieps::all();

     return view('recepti')->with('recepti',$recepti);
    }

}
