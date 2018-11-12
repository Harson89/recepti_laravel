
<!--<ul>
<li> <a href="{{url('http://127.0.0.1:8000/')}}"> Početna </a> </li>
<li> <a href="{{url('kategorije')}}"> Kategorije </a> </li>
<li> <a href="{{url('recepti')}}"> Recepti </a> </li>
<li> <a href="{{url('kuhari')}}"> Kuhari </a> </li>
<li> <a href="{{url('onama')}}"> O nama </a> </li>
</ul>

<h1> Kuhari </h1>
-->







@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://127.0.0.1:8000">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="kategorije">Kategorije <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recepti">Recepti</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="kategorije" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Moj profil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Dodaj novi recept</a>
            <a class="dropdown-item" href="#">Moji recepti</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Odjava</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>
@endsection
