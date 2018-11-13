@extends('layouts.app')
@section('content')

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
         @foreach ($recepti as $recepat)
      <tr>
          <?php
            $imeKuhara= App\User::where('id', $recepat->user_id)->get();
            foreach($imeKuhara as $kuhar){
                $ime = $kuhar->name;
            }
          ?>
      <th scope="row">{{$recepat->id}}</th>
        <td>{{$recepat->naziv_recepta}}</td>
        <td>{{$ime}}</td>
        <td>{{$recepat->priprema}}</td>
      <td> <img src="{{$recepat->slika}}" class="img-fluid" alt="Responsive image"> </td>
      </tr>
  </table>
@endforeach



@endsection
