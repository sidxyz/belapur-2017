<!DOCTYPE html>
<html>
<head>
	<title>add bank screen</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <h4 class="card-title">Add Bank</h4>
  	<form action="/editDetails" method="POST">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlInput1">Bank Id</label>
      <input readonly="readonly" type="text" class="form-control" name="id" id="id" value={{$data->id}}>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Bank Name</label>
      <input type="text" class="form-control" name="bankName" id="bankName" value={{$data->bankName}}>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Bank Branch</label>
      <input type="text" class="form-control" name="bankBranch" id="bankBranch" value="{{$data->bankBranch}}" >
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">IFSC Code</label>
      <input type="text" class="form-control" name="ifsc" id="ifsc" value="{{$data->ifsc}}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Location</label>
      <input type="text" class="form-control" name="location" id="location" value="{{$data->location}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary" >Update</button>
    </div>
    
  </form>
</div>
</body>
</html>
