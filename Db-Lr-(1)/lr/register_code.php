<?php
require_once('connection.php');
$id = $username = $email = $password = $pwd = '';

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbl_user (id, username, email, password) VALUES ('$id', '$username', '$email', '$password');";
$result = mysqli_query($conn, $sql);
echo $result;
if($result)
{
    header("Location: login.php");
}
else
{
    echo "Error :".$sql;
}
