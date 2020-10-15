<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "itech";

$conn = mysqli_connect($servername,$username ,$password);

if (!$conn) 
{
	// die("Connection Failed: " . mysqli_connect_error());

}
// echo "server Connected succesfully";

$db = mysqli_select_db($conn,$db);

if($db) 
{
	// echo "database Selected!";
}
else
{
	echo "database error";
}






?>