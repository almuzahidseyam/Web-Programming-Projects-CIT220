<?php
require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $_SESSION['beginSession'] = "ok";
        $_SESSION['id'] = $row["id"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['username'] = $row["username"];
    }
    header("Location: hallpayment.php");
}
else
{
    echo "Invalid email or password";
    echo "Error :".$sql;
}