@extends('layouts.master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
    <tr>
      <div class="col-md-2"></div>
      <a href="crudlab/create">Add Topic </a>
      </div
    </tr>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Telephone</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['fname']}}</td>
        <td>{{$post['lname']}}</td>
        <td>{{$post['tel']}}</td>
        <td><a href="{{action('ControllerMemberDB@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ControllerMemberDB@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
