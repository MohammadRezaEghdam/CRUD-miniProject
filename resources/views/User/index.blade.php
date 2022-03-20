@extends('layout.master')
@section('content')
<div class="container crud-table" ng-app="myApp">
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
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <button class="btn btn-primary">Edit</button>
            </td>
            <td> 
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr class="text-left">
            <td colspan="2"> <b>Total </b></td>
            <td class="text-center"></td>
            <td colspan="3"></td>
          </tr>
        </tbody>
      </table>
      
    </div>
@endsection