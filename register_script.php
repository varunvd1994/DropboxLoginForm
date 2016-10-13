<?php

//open connection
$con = mysql_connect('localhost','root','rootpassword');
$db = mysql_select_db('reg_form');

//fetch data sent via POST
$first_name = $_POST['user_fname'];
$last_name = $_POST['user_lname'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];

$raw_date = $_POST['year'] . $_POST['month'] . $_POST['day'];
$dob = date('Y-m-d', strtotime($raw_date));

$gen = $_POST['user_gender'];
$gender = "";
if ($gen == "1")
   $gender = "Male";
else if($gen == "2")
   $gender = "Female";

$query = "INSERT INTO users(first_name,last_name,email,password,dob,gender)VALUES('$first_name', '$last_name', '$email', '$password', '$dob', '$gender')";

$sql=mysql_query($query);
if($sql)
	echo"yes";
else echo mysql_error();

mysql_close();

//redirect to successful page
header('location: success.php');
?>
