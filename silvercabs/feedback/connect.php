<?php
$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'silvercabs';

$fname = $_POST['firstname'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$feedback = $_POST['feed'];



$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if($conn-> connect_error)
{
	die("Connection Failed :" . conn->connect_error);
}
if(empty($firstname))
{
	echo("Name can not be blank");
	die();
}
if(empty($email))
{
	echo("Email can not be blank");
	die();
}
if(empty($sex))
{
	echo("Sex can not be blank");
	die();
}
if(empty($feedback))
{
	echo("Feedback can not be blank");
	die();
}

$sql = "INSERT INTO members (First_Name,Email_ID,Sex,Feedback)
VALUES('$firstname','$email','$sex','$feedback')";

if($conn->query($sql) == TRUE)
{
	echo "Thank you for your feedback!!";
}
else
{	"Error" . $sql ."<br>" . $conn->error;
}

$conn->close();




?>