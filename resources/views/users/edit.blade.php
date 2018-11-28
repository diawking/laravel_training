@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h3><i class="fa fa-user-edit"></i> {{ $title }}</h3>
    </div>
    <div class="col-4">
      <div class="float-right">
        <h4><a href="/users"><i class="fa fa-arrow-circle-left"></i> Back to Users List</a></h4>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <form method="post" action="{{action('UserController@update', $users->id)}}">
      {{csrf_field()}}
      <div class="form-group row">
         <input name="_method" type="hidden" value="PATCH">
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="name" value="{{$users->name}}">
          </div>
        </div>

          <div class="form-group row">
            <input name="_method" type="hidden" value="PATCH">
            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="email" value="{{$users->email}}">
            </div>
           </div>

        <div class="form-group row">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> UPDATE USER DETAIL</button>
        </div>
      </form>
  </div>
</div>
@endsection
