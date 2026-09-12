<?php
$conn = mysqli_connect("localhost","root","","db_lr");
session_start();

if(!$conn)
{
    echo "Database connection failed...";
}
?>