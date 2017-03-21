<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Form</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/studentform.css">

<body>
		<div class="col-xs-4" id="compressed">
	<h1 align="center">Edit Student form</h1>
	<form method="POST" role="form" action="/editstudentform/<?php echo $formholder[0]->id; ?>">
	

	{{ csrf_field() }}
	<p>Name: <input type="text" name="name" class="form-control" id="ex3" value='<?php echo $formholder[0]->name; ?>' />
	<p>Student Number: <input type="text" name="studentNum" class="form-control" id="ex3" value='<?php echo $formholder[0]->studentNum; ?>' />
	<p>Course: <input type="text" name="course" class="form-control" id="ex3" value='<?php echo $formholder[0]->course; ?>' />
	<p>Age: <input type="number" name="age" class="form-control" id="ex3" value='<?php echo $formholder[0]->age; ?>' />
	<p>Address: <input name="address" rows="4" cols="30" class="form-control" id="ex3" value='<?php echo $formholder[0]->address; ?>' />
	<p>Guardian: <input type="text" name="guardian" class="form-control" id="ex3" value='<?php echo $formholder[0]->guardian; ?>' />
	<p>Guardian Number: <input type="number" name="guardianNum" class="form-control" id="ex3" value='<?php echo $formholder[0]->guardianNum; ?>' />
	
	<input type="submit" value="Save">
	</div>
</form>
</body>
</html>
