@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading"><h2>{{ $title }}</h2></div>
        <div class="panel-body">
          <p>{{ $subtitle }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
