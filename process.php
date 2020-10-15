<?php
require 'db_connection.php';
if(!isset($_POST['submit']))
{
	header("location:create.php");
	exit();
}
$status=1;
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$age=$_POST['age'];
$exp=$_POST['experience'];
$skill=$_POST['skill'];
$sk="";  
foreach($skill as $sk1)  
   {  
      $sk .= $sk1.",";  
   }  
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
 

 $qry="INSERT INTO employee (name,contact_no,email,age,experience,skills,status,file) values('".$name."','".$contact."','".$email."','".$age."','".$exp."','".$sk."','".$status."','".$_FILES['file']['name']."')";

 $rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "<script>alert('Data inserted succesfully')</script>";
	echo "<script>window.location='view.php';</script>";
	exit();
}
?>