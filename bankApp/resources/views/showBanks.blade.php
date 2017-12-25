@extends('layouts.app')

	@section('content')

	 <div class="container-fluid">

	 	<h4 class="card-title">Registered Banks</h4>
	 	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Bank Name</th>
		      <th scope="col">Branch Name</th>
		      <th scope="col">IFSC</th>
		      <th scope="col">Location</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@for($i=0;$i<count($data);$i++)
		    <tr>
		      <th scope="row"><a href="/editBank/{{$data[$i]->id}}">{{$data[$i]->id}}</th>
		      <td>{{$data[$i]->bankName}}</td>
		      <td>{{$data[$i]->bankBranch}}</td>
		      <td>{{$data[$i]->ifsc}}</td>
		      <td>{{$data[$i]->location}}</td>
		      <td><a href="/deleteBank/{{$data[$i]->id}}">Delete</td>
		    </tr>
		    @endfor
		  </tbody>
		</table>
	 </div>
	 @endsection