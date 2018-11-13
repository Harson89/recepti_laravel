@extends('layouts.app')
@section('content')

<?php
  $kategorije = App\kategorije2::all();
?>

<div class="jumbotron">

<h1> Kategorije </h1>

<br> <br>

<div>

@foreach ($kategorije as $kategorija)

<a href="/receptiKategorije/{{$kategorija->id}}">
    <button class="btn btn-primary">
        <p> {{$kategorija->naziv_kategorije}} </p>
    </button>
</a>
<br>
<br>

@endforeach

</div>

</div>

@endsection
