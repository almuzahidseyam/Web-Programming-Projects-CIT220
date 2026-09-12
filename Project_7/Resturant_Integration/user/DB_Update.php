<?php include "PHP_2_BD.php"; ?>
<?php

 if(isset($_POST['update'])){
   // echo"<h1>Information Submitted!</h1>";
    echo "<br>";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $db=mysqli_select_db($connection,"logInInfo");
      if($username!=NULL&&$password!=NULL){
    $update="UPDATE logInfoList SET username = '$username' , password = '$password'";
    $update.=" WHERE ID = $id";
    $query=mysqli_query($connection,$update);
    mysqli_close($connection);
    echo("ID $id updated!!!!");
       }
        else{
            die("Info not updated");
            }
 }
?>