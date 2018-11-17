<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\User;

class urediController extends Controller
{

//Funkcija za ispis recepta koji treba urediti

 public function recepatZaUrediti($za_urediti)
 {
      $urediOvaj = recieps::where('id',$za_urediti)->get();
      return view ('/urediRecepat')->with('urediOvaj',$urediOvaj);
 }

//Funkcija za editovanje datog recepta

 public function uredjivanjeRecepta(Request $request,$urediOvaj)
 {
     $uredjivac= \App\recieps::find($urediOvaj);
     $uredjivac->naziv_recepta=$request->get('nazivRecepta');
     $uredjivac->priprema=$request->get('priprema');

     $uredjivac->save();

     return redirect('mojiRecepti');
 }
}
