@extends('layouts.app')
@section('content')

<div class="well">
@foreach ($kategorije as $kategorija)
    {{$kategorija->naziv_kategorije}}
    <br>
@endforeach
</div>

@endsection
