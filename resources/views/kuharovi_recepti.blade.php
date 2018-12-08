@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Otvori</th>
        <th scope="col">Naziv recepta</th>
        <th scope="col">Kuhar</th>
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
      <th scope="row">
        <a href="/pojedinacanRecept/{{$zaPrikaz = $recepat->id}}"> <button class="btn btn-outline-secondary"> Otvori </button> </a>  </td>
      </th>
        <td>{{$recepat->naziv_recepta}}</td>
        <td><a href="/kuharoviRecepti/{{$id_kuhara = $kuhar->id}}">{{$ime}}</a></td>
      <td> <img src="{{$recepat->slika}}" class="img-fluid" alt="Responsive image" width="500px" height="500px" > </td>
      </tr>

@endforeach
</table>


@endsection
