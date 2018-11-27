@extends('layouts.master')
@section('content')
<div class="container">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $employees->fname." ". $employees->lanmename }}</h5>
      <p class="card-text">{{ $employees->email }}</p>
    </div>
    <div class="col-md-12">
      <a href="{{action('EmployeeController@edit', $employees->id)}}" class="btn btn-warning">Edit</a>
    </div>
  </div>

</div>
@endsection
