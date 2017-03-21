<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/studentform.css">
<body>

<div class="page-header" id="listhead">
<h1 align="center">Student List</h1></div>
<form method="POST" action="add">
{{ csrf_field() }}
<div class="table-responsive" id="list">
<table class="table table-bordered table-hover table-condensed">
<tr>
	<th>Name</th>
	<th>Student Number</th>
	<th>Course</th>
	<th>Age</th>
	<th>Address</th>
	<th>Guardian</th>
	<th>Guardian Number</th>
	<th></th>
	<th></th>
	
</tr>
@foreach($formholder as $repeat)
<tr>
	<td>{{ $repeat -> name }}</td>
	<td>{{ $repeat -> studentNum }}</td>
	<td>{{ $repeat -> course }}</td>
	<td>{{ $repeat -> age }}</td>
	<td>{{ $repeat -> address }}</td>
	<td>{{ $repeat -> guardian }}</td>
	<td>{{ $repeat -> guardianNum }}</td>
	<td><a href="editstudentform/{{ $repeat-> id }}">Edit</a></td>
	<td><a href="deletestudentform/{{ $repeat-> id }}">Delete</a></td>
	
</tr>
@endforeach

</table>
<button name="add" value="addNewStd" class="btn btn-primary">Add New Student</button>

</div>

</form></body>
</html>

