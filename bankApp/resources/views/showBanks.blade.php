<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>show registered banks</title>
</head>
<body>
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
</body>
</html>