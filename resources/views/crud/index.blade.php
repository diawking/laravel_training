@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="crud/create">Add Employee</a>
    </div>
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($employees as $emp)
          <tr>
            <td>{{ $emp->id }}</td>
            <td>{{ $emp->fname }}</td>
            <td>{{ $emp->lname }}</td>
            <td>{{ $emp->email }}</td>
            <td><a href="{{action('EmployeeController@edit', $emp->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
              <form action="{{action('EmployeeController@destroy', $emp->id)}}" method="post">
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
  </div>
</div>
@endsection
