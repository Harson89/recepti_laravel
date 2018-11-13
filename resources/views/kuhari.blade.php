@extends('layouts.app')
@section('content')





<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Ime</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    @foreach ($kuhari as $kuhar)
    <tbody>
      <tr>
      <th scope="row">{{$kuhar->id}}</th>
      <td>{{$kuhar->name}}</td>
      <td>{{$kuhar->email}}</td>
      <td></td>
      </tr>
    </tbody>
    @endforeach
  </table>

  <br>



@endsection
