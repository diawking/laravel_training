@extends('layouts.master')
@section('content')
<div class="container">

  <form method="post" action="{{action('EmployeeController@update', $employees->id)}}">
    {{csrf_field()}}
    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="fname" value="{{$employees->fname}}">
      </div>
    </div>

    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Lastname</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Lastname" name="lname" value="{{$employees->lname}}">
      </div>
    </div>

      <div class="form-group row">
        <input name="_method" type="hidden" value="PATCH">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Telephone" name="email" value="{{$employees->email}}">
        </div>
       </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection
