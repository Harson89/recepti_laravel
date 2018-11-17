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

public function updejtuj(Request $request)
{

    $novoIme = $request->get('noviNaziv');
    $novaPriprema = $request->get('novaPriprema');
    $UrediOvaj = $request->get('id');

    $uredjivac = recieps::where('id',$UrediOvaj);

    return redirect('/urediRecepat1');

  /* $uredjivac= \App\recieps::where(id);
    $id = $request->get('id');
    $uredjivac = recieps::where('id',$id)->get();
    $uredjivac->naziv_recepta=$request->get('noviNaziv');
    $uredjivac->priprema=$request->get('novaPriprema');

    $uredjivac->save();

    return redirect('/');*/
}



 /*Pokusaj update tabele
   public function updejtuj(Request $request )
   {
    $naziv = $request->get('noviNaziv');
    $id = $request->get('id');
    DB::table('recieps')


    ->where('id', $id)  // find your user by their email
    ->limit(1)  // optional - to ensure only one record is updated.
    ->update(array('naziv_recepta' => $naziv));  // update the record in the DB.
   }




public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jokeText' => 'required'
        ]);

        //uredjivanje vica
        $recepti = recieps::find($id);
        $recepti->naziv_recepta = $request->input('nazivRecepta');
        $recepti->priprema = $request->input('priprema');

        $jokes->save();

        //redirect

        return redirect('/mojiRecepti');
    }
 */
}
