@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h3><i class="fa fa-user-cog"></i> {{ $title }}</h3>
    </div>
    <div class="col-4">
      <div class="float-right">
        <h4><a href="/users"><i class="fa fa-arrow-circle-left"></i> Back to Users List</a></h4>
      </div>
    </div>

    <div class="col-4"></div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.wpclipart.com/signs_symbol/icons_oversized/male_user_icon.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $users->name }}</h5>
          <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $users->email }}</li>
        </ul>
      </div>
    </div>
    <div class="col-4"></div>

  </div>



</div>
@endsection
