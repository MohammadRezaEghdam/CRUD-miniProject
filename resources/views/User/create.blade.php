@extends('layout.master')
@section('content')
<div class="crude-form__wrapper">
        <h3>Edit user</h3>
        <h3>Add user</h3>
        <form name="userForm" >
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="editName" type="text" name="name" placeholder="Edit name" required="required"/>
            <div class="form-alert alert alert-danger" >Please input name</div>
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input class="form-control" id="editCounty" type="text" name="country" placeholder="Edit country" required="required"/>
            <div class="form-alert alert alert-danger" >Please input user country</div>
          </div>
          <div class="form-group">
            <label for="salary">Salary</label>
            <input class="form-control" id="editSalary" type="number" name="salary" placeholder="Edit salary" required="required"/>
            <div class="form-alert alert alert-danger" ><span >Please input valid number</span><span >Please input salary greater than 1</span><span>Please input salary</span></div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="editEmail" type="email" name="email" placeholder="Edit email" required="required"/>
          </div>
          <div class="form-alert alert alert-danger"><span>Please input valid email</span><span>Please input email	</span></div>
          <div class="form-alert alert alert-danger" >  This email has been registerd by other user</div>
          <button class="btn btn-primary"> <i class="glyphicon glyphicon-pencil"> </i>Save change </button>
          <button class="btn btn-primary" >Cancel<button>
        </form>
</div>
@endsection