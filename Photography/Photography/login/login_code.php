<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		session_start();
		$_SESSION['id'] = $row["id"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['fName'] = $row["first_name"];
		$_SESSION['lName'] = $row["last_name"];
		$_SESSION['gender'] = $row["gender"];
	}
	header("Location: ../photography.html");
}
else
{
	echo "Invalid email or password";
}
?>