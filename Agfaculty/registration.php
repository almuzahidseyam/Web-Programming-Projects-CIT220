<?php include "navbar_head.php" ?>
<?php

      $hostname ='localhost';
      $hostuser ='root';
      $hostpassword = 'mysql'; 

      $dbconnection = mysqli_connect($hostname,$hostuser,$hostpassword);

      $dbcreate = "CREATE DATABASE agfaculty";
      mysqli_query($dbconnection,$dbcreate);

      mysqli_select_db($dbconnection,"agfaculty");

      $tablecreate = "CREATE TABLE department( 
       SL int(100) NOT NULL AUTO_INCREMENT, 
       Department varchar(50) NOT NULL,
       tName varchar(50) NOT NULL,
       designation varchar(50) NOT NULL,
       email varchar(50) NOT NULL,
       Contact varchar(50) NOT NULL,
       Password varchar(20) NOT NULL,
       PRIMARY KEY(SL)
    )";

      mysqli_query($dbconnection,$tablecreate);

      if(isset($_POST['regis'])){

     $Department = $_POST['Department'];
     $Name =   $_POST['Name'];
     $Designation =  $_POST['Designation'];
     $Email  =  $_POST['Email']  ;
     $Contact  =  $_POST['Contact'];  
     $Password  =   $_POST[ 'Password'] ;


      }

    if($Department!=NULL&&$Name!=NULL&&$Designation!=NULL&&$Email!=NULL&&$Contact!=NULL&&$Password!=NULL){

      $insert= "INSERT INTO department(Department,tName,designation,Email,Contact,Password) VALUES('$Department','$Name','$Designation','$Email','$Contact',$Password)";
        mysqli_query($dbconnection,$insert);
      }

    else {
          echo "NOT SUBMITTED INFORMATION";

    }  
















?>





<div class="container">
  <div class="row m-5">
  <div class="col-lg-8 m-5">
 
  <form action="" method="post">
     
    <div class="form-group">
      <label >Name of the Department</label>
      <input type="text" name="Department"  class="form-control"  placeholder="Department">
    </div>
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Name">
    </div>
    <div class="form-group">
    <label>Designation</label>
    <input type="text" name="Designation"  class="form-control"  placeholder="Designation">
     </div>
    <div class="form-group">
    <label>Email address</label>
    <input type="text"name="Email"  class="form-control"  placeholder="Email address">
    </div>
    <div class="form-group">
    <label>Contact No</label>
    <input type="text"name="Contact"  class="form-control"  placeholder="Contact No">
     </div>

      <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" class="form-control"  placeholder="Password">
  </div>
  <button type="submit" name="regis" class="btn btn-lg btn-info">Submit</button>
  
</form>

</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
