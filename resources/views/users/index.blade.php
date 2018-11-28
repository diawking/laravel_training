@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-9">
      <h3><i class="fa fa-users"></i> {{ $title }}</h3>
    </div>
    <div class="col-3">
      <div class="float-right">
        <h4><a href="users/create"><i class="fa fa-user-plus"></i> Add User</a></h4>
      </div>
    </div>
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a href="/users/{{$user->id}}" class="btn btn-success"><i class="fa fa-search"></i> Show</a>
            </td>
            <td>
              <a href="{{action('UserController@edit', $user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            </td>
            <td>
              <form action="{{action('UserController@destroy', $user->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-12">
      {{ $users->links() }}
    </div>
  </div>
</div>
@endsection
