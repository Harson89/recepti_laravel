@extends('layouts.app')
@section('content')



@foreach ($ovajRecept as $prikaz)

{



<div class="card">
<h3 class="card-header text-center font-weight-bold text-uppercase py-4">{{$prikaz->naziv_recepta}}</h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fa fa-plus fa-2x"
              aria-hidden="true"></i></a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <tr>
            <th class="text-center">Naziv Recepta</th>
            <th class="text-center">Kuhar</th>
            <th class="text-center">Priprema</th>
            <th class="text-center">Slika</th>
          </tr>
          <tr>
          <td class="pt-3-half" contenteditable="true">{{$prikaz->naziv_recepta}}</td>

          <?php
          $imeKuhara= App\User::where('id', $prikaz->user_id)->get();
          foreach($imeKuhara as $kuhar){
              $ime = $kuhar->name;
          }
          ?>

            <td class="pt-3-half" contenteditable="true">{{$ime}}</td>
        <td class="pt-3-half" contenteditable="true" style="width: 35%; word-break:break-all;"><?php echo nl2br($prikaz->priprema) ?></td>
            <td class="pt-3-half">
                <img src="{{$prikaz->slika}}" class="img-fluid" alt="Responsive image" width="500px" height="500px">
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>


 @endforeach

@endsection
