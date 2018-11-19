<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\User;
use App\kategorije2;
use Auth;

class urediController extends Controller
{

//Funkcija za ispis recepta koji treba urediti

public function recepatZaUrediti($za_urediti)
 {
      $urediOvaj = recieps::where('id',$za_urediti)->get();
      return view ('/urediRecepat')->with('urediOvaj',$urediOvaj);
 }


//Funkcija za editovanje datog recepta

public function updejtuj(Request $request)
{

        $id1=$request->get('id');

        //uredjivanje recepta
        $recepti = recieps::find($id1);
        $recepti->naziv_recepta = $request->get('noviNaziv');
        $recepti->priprema = $request->get('novaPriprema');


        $recepti->save();



        return redirect('/mojiRecepti');








}
}
