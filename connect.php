<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3307', 'root', '','sample');

// get the post records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO `form` (`ID`, `firstname`, `lastname`, `gender`, `age` , `email`, `phone`) VALUES ('0', '$firstname', '$lastname', '$gender','$age' , '$email', '$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>