<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\recieps;
use App\User;
use App\kategorije2;
use Auth;


class dodajController extends Controller
{

   //Funkcija za ispis kategorija za odabir

    public function ispisKategorija()
    {
    $kategorije = kategorije2::All();
    return view ('/dodajRecept')->with('kategorije',$kategorije);
    }

    //Funkcija za dodavanje novog recepta u bazu


        public function store(Request $request)
        {
            $trenutni_user = Auth::id();
            if($request->hasfile('filename'))
             {
                $file = $request->file('filename');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
             }
            $unos= new \App\recieps;
            $unos->naziv_recepta=$request->get('nazivRecepta');
            $unos->user_id=$trenutni_user;
            $unos->priprema=$request->get('priprema');
            $unos->kategorija_id=$request->get('kategorija');
            $unos->slika="images/".$request->get('filename');
            $unos->save();

            return redirect('/mojiRecepti');
        }

}
