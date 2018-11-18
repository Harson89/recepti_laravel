@extends('layouts.app')
@section('content')

<?php
$trenutnaKategorija = $receptiKategorije;
?>

<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
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
          <th scope="row">{{$receptiTe->id}}</th>
            <td>{{$receptiTe->naziv_recepta}}</td>
            <td>{{$ime}}</td>
            <td>{{$receptiTe->priprema}}</td>
          <td> <img src="{{$receptiTe->slika}}" class="img-fluid" alt="Responsive image"> </td>
          </tr>
          @endforeach
      </table>


@endsection
