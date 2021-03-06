@extends('layouts.app')
@section('content')

<?php
$trenutnaKategorija = $receptiKategorije;
?>

<table class="table">
        <thead>
          <tr>

            <th scope="col">Naziv recepta</th>
            <th scope="col">Kuhar</th>
            <th scope="col">Priprema</th>
            <th scope="col">Slika</th>

          </tr>
        </thead>
        <tbody>
             @foreach ($trenutnaKategorija as $receptiTe)

          <tr>
                <?php
                $imeKuhara= App\User::where('id', $receptiTe->user_id)->get();
                foreach($imeKuhara as $kuhar){
                    $ime = $kuhar->name;
                }
             ?>

          <th scope="row">
            <a href="/pojedinacanRecept/{{$zaPrikaz = $receptiTe->id}}"> <button class="btn btn-outline-secondary"> Otvori </button> </a>  </td>
          </th>
            <td>{{$receptiTe->naziv_recepta}}</td>
            <td>{{$ime}}</td>
            <td> <img src="{{$receptiTe->slika}}" class="img-fluid" alt="Responsive image" width="500px" height="500px" > </td>
        </tr>
          @endforeach
      </table>


@endsection
