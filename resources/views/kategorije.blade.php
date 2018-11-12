@extends('layouts.app')
@section('content')


@foreach ($kategorije as $kategorija)
<a href=""> {{$kategorija->naziv_kategorije}} </a>
    <br>
@endforeach


@endsection
