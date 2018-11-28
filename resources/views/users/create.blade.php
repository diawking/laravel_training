<!-- create.blade.php -->
@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h3><i class="fa fa-user"></i> {{ $title }}</h3>
    </div>
    <div class="col-4">
      <div class="float-right">
        <h4><a href="/users"><i class="fa fa-arrow-circle-left"></i> Back to Users List</a></h4>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <form method="post" action="{{url('users')}}">
      {{csrf_field()}}
      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="name">
        </div>
      </div>
      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="email">
        </div>
      </div>
      <div class="form-group row">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> CREATE NEW USER</button>
      </div>
    </form>
  </div>
</div>
@endsection
