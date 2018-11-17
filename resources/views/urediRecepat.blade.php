@extends('layouts.app')
@section('content')



@foreach ($urediOvaj as $zaUrediti)



<div class="container">

    <form method="get" action="urediRecepat"  >

            <div class="form-group row">
              <label for="nazivRecepta" class="col-sm-2 col-form-label">Novi naziv recepta:</label>
              <div class="col-sm-10">
              <input required="required" type="text" class="form-control" name="noviNaziv" id="nazivRecepta" placeholder="{{$zaUrediti->naziv_recepta}}">
              </div>
            </div>

            <div class="form-group row">
                    <label for="priprema" class="col-sm-2 col-form-label">Uredite pripremu:</label>
                    <div class="col-sm-10">
                    <textarea required="required" class="form-control" rows="5" name="novaPriprema" id="priprema" placeholder="{{$zaUrediti->priprema}}"></textarea>
                    </div>
                  </div>


                          <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4" style="margin-top:60px">
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>


          </form>
        </div>




        @endforeach

@endsection



