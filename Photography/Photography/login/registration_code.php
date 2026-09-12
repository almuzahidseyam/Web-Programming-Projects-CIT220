<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fName = $lName = $gender = $email = $password = $pwd = '';

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO users (first_name, last_name, gender, email, password) VALUES ('$fName', '$lName' , '$gender', '$email', '$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>