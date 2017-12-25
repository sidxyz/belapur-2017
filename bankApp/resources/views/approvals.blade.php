@extends('layouts.app')

	@section('content')

	 <div class="container-fluid">



	 	<h4 class="card-title">Users Pending Approvals</h4>
	 	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">User Name</th>
		      <th scope="col">Location</th>
		      <th scope="col">View Profile</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@for($i=0;$i<count($data);$i++)
		  	 <tr>
		      <th scope="row"><a href="/editBank/{{$data[$i]->id}}">{{$data[$i]->id}}</th>
		      <td>{{$data[$i]->name}}</td>
		      <td>{{$data[$i]->address}}</td>
		      <td><a href="/showprofile/{{$data[$i]->id}}">Show Documents</td>
		    </tr>
		  	@endfor
		  </tbody>
		</table>
	 </div>
	 @endsection