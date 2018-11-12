@extends('layouts.app')
@section('content')

@foreach ($recepti as $recepat)
 {{$recepat->naziv_recepta}}
    <br>
@endforeach


@endsection
