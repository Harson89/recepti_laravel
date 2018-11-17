@extends('layouts.app')
@section('content')

<div class="container">

<form method="get" action="dodajRecept1" enctype="multipart/form-data">

        <div class="form-group row">
          <label for="nazivRecepta" class="col-sm-2 col-form-label">Naziv Recepta:</label>
          <div class="col-sm-10">
            <input required="required" type="text" class="form-control" name="nazivRecepta" id="nazivRecepta" placeholder="Ovdje unesite naziv svog recepta">
          </div>
        </div>

        <div class="form-group row">
                <label for="priprema" class="col-sm-2 col-form-label">Priprema:</label>
                <div class="col-sm-10">
                        <textarea required="required" class="form-control" rows="5" name="priprema" id="priprema" placeholder="Ovdje upišite način pripreme recepta"></textarea>
                </div>
              </div>

              <div class="row">
              <div class="form-group col-md-4">
                    <label>Kategorija</label>
                    <select name="kategorija">

                    @foreach ($kategorije as $kategorija)
                    <option value="{{$kategorija->id}}"">{{$kategorija->naziv_kategorije}}</option>
                    @endforeach

                    </select>
                </div>
              </div>

                <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <input type="file" name="filename">
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

@endsection
