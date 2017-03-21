<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/studentform.css">

<body>
		<div class="col-xs-4" id="compressed">
	<h1 align="center">Student form</h1>
	<form method="POST" role="form" action="/students">
	

	{{ csrf_field() }}
	<p>Name: <input type="text" name="name" class="form-control" id="ex3">
	<p>Student Number: <input type="text" name="studentNum" class="form-control" id="ex3">
	<p>Course: <input type="text" name="course" class="form-control" id="ex3">
	<p>Age: <input type="number" name="age" class="form-control" id="ex3">
	<p>Address: <textarea name="address" rows="4" cols="30" class="form-control" id="ex3"></textarea>
	<p>Guardian: <input type="text" name="guardian" class="form-control" id="ex3">
	<p>Guardian Number: <input type="number" name="guardianNum" class="form-control" id="ex3">
	
	<input type="submit" value="Register">
	</div>
</form>
</body>
</html>
