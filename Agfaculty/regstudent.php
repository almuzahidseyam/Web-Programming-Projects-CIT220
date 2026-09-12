<?php

 $con=mysqli_connect('localhost','root','mysql','agfaculty');
 if(isset($_POST['regis'])){

     $id=$_POST['id'];
     $batch=$_POST['batch'];
     $name=$_POST['name'];
     $gmail=$_POST['gmail'];
     $phnno=$_POST['phnno'];
     $address=$_POST['address'];  
     $hall=$_POST['hall'] ;
      $semester=$_POST['semester'] ;
$insert= "INSERT INTO stinformation( id,batch,name,gmail,phnno,address,hall,semester) VALUES('$id','$batch','$name','$gmail','$phnno','$address','$hall','$semester')";
     
$data=mysqli_query($con,$insert);

      

    if($data){
      echo "successfully"; 
      }

    else {
          echo "NOT SUBMITTED INFORMATION";

         }

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>information add</title>
</head>
<body>
  <?php include "navbar_head.php" ?>

   <div class="row m-5">
  <div class="col-lg-8 m-5">
 <div class="container">

  <form action="" method="POST" enctype="multipart/form-data laravel">
    
<div class="form-group">
      <label >id</label>
      <input type="text" name="id"  class="form-control"  placeholder="id">
    </div>

    <div class="form-group">
      <label >batch</label>
      <input type="text" name="batch"  class="form-control"  placeholder="batch">
    </div>

     <div class="form-group">
      <label >name</label>
      <input type="text" name="name"  class="form-control"  placeholder="name">
    </div>

    <div class="form-group">
    <label>gmail</label>
    <input type="text" name="gmail"  class="form-control"  placeholder="gmail">
     </div>
    <div class="form-group">
    <label>phnno</label>
    <input type="text"name="phnno"  class="form-control"  placeholder="phnno">
    </div>
    <div class="form-group">
    <label>address</label>
    <input type="text"name="address"  class="form-control"  placeholder="address">
     </div>

      <div class="form-group">
    <label>hall</label>
    <input type="text" name="hall" class="form-control"  placeholder="hall">
  </div>
  <div class="form-group">
    <label>semester</label>
    <input type="text" name="semester" class="form-control"  placeholder="semester">
  </div>
  <button type="submit" name="regis" class="btn btn-lg btn-info">Submit</button>
  
</form>

</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

</body>
</html>
 