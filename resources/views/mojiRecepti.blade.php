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
      <td> <img src="{{$recepat->slika}}" class="img-fluid" alt="Responsive image"> </td>
      </tr>
  </table>
@endforeach



@endsection
