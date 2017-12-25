@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <h4 class="card-title">Create Account</h4>
  	<form action="/createaccount" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlInput1">User Name</label>
      <input type="text" class="form-control" name="name" id="name" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email</label>
      <input type="text" class="form-control" name="email" id="email" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Password</label>
      <input type="password" class="form-control" name="password" id="password" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Confirm Password</label>
      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Mobile</label>
      <input type="text" class="form-control" name="mobile" id="mobile" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pan</label>
      <input type="text" class="form-control" name="pan" id="pan" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Photo</label>
      <input type="file" class="form-control" name="photo" id="photo" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Address</label>
      <input type="text" class="form-control" name="address" id="address" >
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" >Create Account</button>
    </div>
    
  </form>
</div>
@endsection
