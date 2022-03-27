@extends('layout.master')
@section('content')
<div class="crude-form__wrapper">
        <h3>Edit user</h3>
        <h3>Add user</h3>
        <form action="{{route('user.store')}}" method="POST" >
          @csrf
          <div class="form-group">
            <label for="name">fullname</label>
            <input class="form-control" id="fullname" type="text" name="fullname" placeholder="fullname" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="editEmail" type="email" name="email" placeholder="Edit email" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password" placeholder="Password" />
          </div>
          <input type="submit" class="btn btn-primary" value="Insert User">
          <button class="btn btn-primary" >Cancel<button>
        </form>
</div>
@endsection