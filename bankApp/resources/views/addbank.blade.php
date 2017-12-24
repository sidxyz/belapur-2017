@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <h4 class="card-title">Add Bank</h4>
  	<form action="/storebank" method="POST">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlInput1">Bank Name</label>
      <input type="text" class="form-control" name="bankName" id="bankName" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Bank Branch</label>
      <input type="text" class="form-control" name="bankBranch" id="bankBranch" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">IFSC Code</label>
      <input type="text" class="form-control" name="ifsc" id="ifsc" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Location</label>
      <input type="text" class="form-control" name="location" id="location" >
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" >Add</button>
    </div>
    
  </form>
</div>
@endsection
