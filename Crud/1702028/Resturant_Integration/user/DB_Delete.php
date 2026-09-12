<?php include "PHP_2_BD.php"; ?>
<?php

 if(isset($_POST['delete'])){
   // echo"<h1>Information Submitted!</h1>";
    echo "<br>";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    $db=mysqli_select_db($connection,"logInInfo");
      if($username!=NULL&&$password!=NULL){
    $delete="DELETE FROM logInfoList ";
    $delete.="WHERE ID = $id";
    $query=mysqli_query($connection,$delete);
    mysqli_close($connection);
    echo("ID $id deleted!!!!");
       }
        else{
            die("Info not deleted");
            }
 }
?>