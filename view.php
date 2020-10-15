<?php
require'db_connection.php';
$qrys="SELECT * FROM employee where status=1";
$rss=mysqli_query($conn,$qrys);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Employee Data</title>
</head>
<body>
<h1>Employee Data</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Experience</th>
      <th scope="col">Skills</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
  	 <?php
        if (mysqli_num_rows($rss)>0)
            {
        while ($row=mysqli_fetch_assoc($rss))
            {
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['contact_no'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><?php echo $row['experience'];?></td>
      <td><?php echo $row['skills'];?></td>
      <td><?php echo $row['file'];?></td>
    </tr>
    <?php
        }
        }
        else
        {
            echo "O ROW FOUND";
        }
        ?>
  </tbody>
</table>
</body>
</html>