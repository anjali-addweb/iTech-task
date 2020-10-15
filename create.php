<?php
require('db_connection.php');


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/parsley.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/parsley.min.js"></script>
	<title></title>
</head>
<body>
<h1> Employee Form</h1>
<form method="post" action="process.php" id="demo-form" enctype="multipart/form-data" data-parsley-validate="">
	<div class="form-group">
    <label for="Name">Name:-</label>
    <input type="name" class="form-control" placeholder="Enter name" name="name"  required="">
  </div>
  <div class="form-group">
    <label for="Contact">Contact No:-</label>
    <input type="number" class="form-control" id="contact" aria-describedby="emailHelp" placeholder="Enter Contact No" name="contact" required="" data-parsley-minlength="10">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:-</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" data-parsley-trigger="change" required="">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="age">Age:-</label>
    <input type="number" class="form-control" id="age"  placeholder="Enter Your Age" name="age" required="">
  </div>
  <div class="form-group">
    <label for="experience">Experience</label>
    <select class="form-control" id="experience" name="experience" required="">
      <option value="0-1 year">0-1 Year</option>
      <option value="2 year">2 Year</option>
      <option value="3 year">3 Year</option>
      <option value="4 year">4 Year</option>
      <option value="5 year">5 Year</option>
    </select>
  </div>
  <label for="skills">Skills </label>
  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="front-end" name="skill[]" data-parsley-mincheck="1">Front-end 
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="back-end" name="skill[]">Back-end
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="full stack" name="skill[]">Full stack 
  </label>
</div>
 
  <div class="form-group">
    <label for="file">Resume:-</label>
    <input type="file" class="form-control-file" id="file" name="file" required="">
  </div>
  <input type="submit" name="submit">
</form>
<script>
  $('#demo-form').parsley();
</script>
</body>
</html>