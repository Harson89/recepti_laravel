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
    return view ('/mojiRecepti')->with('recepti',$recepti);
    }

    //Funkcija za brisanje recepta

    public function brisanjeRecepta($za_izbrisati)
    {
         $izbrisiOvaj = recieps::findOrFail($za_izbrisati);
         $izbrisiOvaj->delete();
         return redirect('/mojiRecepti');
    }

     /*Funkcija za uredjivanje recepta

    public function uredjivanjeRecepta($za_urediti)
    {
         $urediOvaj = recieps::findOrFail($za_urediti);
         return view ('/urediRecepat')->with('urediOvaj',$urediOvaj);
    }

*/
}
