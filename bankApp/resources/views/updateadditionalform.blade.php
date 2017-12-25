@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <h4 class="card-title">Upload Supporting Documents</h4>
  	<form action="/uploaddocs" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlInput1">Adhar Card</label>
      <input type="file" class="form-control" name="adhar" id="adhar" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Pan Card</label>
      <input type="file" class="form-control" name="pan" id="pan" >
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" >Submit</button>
    </div>
    
  </form>
</div>
@endsection
