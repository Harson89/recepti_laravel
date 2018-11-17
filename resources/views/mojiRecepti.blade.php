@extends('layouts.app')
@section('content')



<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naziv recepta</th>
        <th scope="col">Priprema</th>
        <th scope="col">Slika</th>

      </tr>
    </thead>
    <tbody>
         @foreach ($recepti as $recepat)



      <tr>
      <th scope="row">{{$recepat->id}}</th>
        <td>{{$recepat->naziv_recepta}}</td>
        <td>{{$recepat->priprema}}</td>
      <td> <img src="{{$recepat->slika}}" class="img-thumbnail" alt="Cinque Terre"> </td>
      <td> <a href="/urediRecepat/{{$za_urediti = $recepat->id}}"> <button class="btn btn-outline-secondary"> Uredi </button> </a>  </td>
      <td> <a href="/mojiRecepti/{{$za_izbrisati = $recepat->id}}"> <button class="btn btn-outline-secondary"> Izbriši </button> </a> </td>
      <td>  </td>
      </tr>


@endforeach
</table>
@endsection
