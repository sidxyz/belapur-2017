@extends('layouts.app')

	@section('content')

	 <div class="container-fluid">
	 	<h2 class="card-title">Uploaded Documents</h4>
	 	<div class="row">
	 	@for($i=0;$i<count($data);$i++)
	 		<div class = "col-md-3">
	 		<h4>{{ $data[$i]->name }}</h4>
            <div style="background-image:url(/{{ $data[$i]->url }});width: 200px;height: 200px;background-size: contain;"></div>
        	</div>	
         @endfor
         </div>
         <br>
         <a href="/approveprofile/{{ $data[0]->user_id }}" class="btn btn-primary">Approve</a>
	 </div>
	 @endsection