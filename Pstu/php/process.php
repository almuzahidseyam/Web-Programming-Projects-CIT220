<?php

$mysqli = new mysqli('localhost','root','','pstu') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){
    $email = $_POST['email'];
    $mysqli->query("insert into newsletter (email) values('$email')") or die($mysqli->error);
}
if(isset($_POST['save_1'])){
    $emails = $_POST['emails'];
    $mysqli->query("insert into newsletter (email) values('$emails')") or die($mysqli->error);
}
if(isset($_POST['save_2'])){
    $email_1 = $_POST['email_1'];
    $mysqli->query("insert into newsletter (email) values('$email_1')") or die($mysqli->error);
}
if(isset($_POST['savec'])){
    $cemail = $_POST['cemail'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mysqli->query("insert into customer (name,email,message) values('$name','$cemail','$message')") or die($mysqli->error);
}