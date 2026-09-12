<?php
$mysqli = new mysqli('localhost', 'root','','crud') 
or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $setmenu = $_POST['setmenu'];

    $mysqli->query("INSERT INTO data (name,email,setmenu)VALUES('$name','$email','$setmenu')")
    
    or die($mysqli->error);
}
?>
