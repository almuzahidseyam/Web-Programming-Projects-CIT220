<?php
    $db_host='localhost';
    $db_user='root';
    $db_pass='mysql';
    $connection=mysqli_connect($db_host,$db_user,$db_pass);//('host' 'username' 'password' 'dbname')
    if(!$connection){
        die(mysqli_error()."<br> COULD NOT ESTEBLISH CONNNECTION TO SERVER");
        exit();
    }
?>