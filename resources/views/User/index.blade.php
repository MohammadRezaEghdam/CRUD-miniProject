@extends('layout.master')
@section('content')
<div class="container crud-table">
      <div class="clearfix">
        <div class="form-inline pull-left">
          <button class="btn btn-success"><span class="glyphicon glyphicon-plus"> </span>Add more user</button>
        </div>
        <div class="form-inline pull-right">Search by name: 
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Type name to search"/>
          </div>
        </div>
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th >Name</th>
            <th>Country</th>
            <th>Salary</th>
            <th>Email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach ($getAllUsers as $user)
            <tr>
              <td>{{$user->fullname}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
            <td>
              <button class="btn btn-primary">Edit</button>
            </td>
            <td> 
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
            @endforeach
            
          <tr class="text-left">
            <td colspan="2"> <b>Total:{{sizeof($getAllUsers)}} </b></td>
            <td class="text-center"></td>
            <td colspan="3"></td>
          </tr>
        </tbody>
      </table>
      
    </div>
@endsection