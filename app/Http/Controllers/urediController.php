<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\User;

class urediController extends Controller
{

 //Funkcija za uredjivanje recepta

 public function uredjivanjeRecepta($za_urediti)
 {
      $urediOvaj = recieps::where('id',$za_urediti)->get();
      return view ('/urediRecepat')->with('urediOvaj',$urediOvaj);
 }


}
