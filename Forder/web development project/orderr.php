<?php
$conn = mysqli_connect('localhost','root','','food');

if($conn){
    echo "Connected";
}

//$quer="INSERT INTO order(username,email,address,password) VALUES('ji','@r','r','7')";

if(isset($_POST['submit'])){

echo $username=$_POST['name'];
echo    $email=$_POST['email'];
echo   $address=$_POST['address'];
echo   $password=$_POST['pwd'];
    echo   $contactno=$_POST['contactno'];
   $d=mysqli_select_db($conn,"food");
    echo $d;
   $quer="INSERT INTO forder(username,email,address,password,contactno) VALUES('$username','$email','$address','$password','$contactno') ";
   $ss = mysqli_query($conn,$quer);
    
   if($ss){
   echo "DATA INSEETED";
   
 }
   
  

}


else
{
    
    echo "not ";
}

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>
<body>


  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Online Food Ordering System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="indexx.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aboutus.php">About Us</a>
          <a class="dropdown-item" href="review.php">Review of Customer</a>
          <a class="dropdown-item" href="rating.php">Rating of Customer</a>
         
      </div>
         
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="fastfood.php">Fast Food</a>
          <a class="dropdown-item" href="Thaifood.php">Thai Food</a>
          <a class="dropdown-item" href="chinesefood.php">Chinese Food</a>
          <a class="dropdown-item" href="mexicanfood.php">Mexican Food</a>
          <a class="dropdown-item" href="biryani.php">Biryani</a>
      </div>
         
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>

  </div>
</nav>

<div class="col-lg-3 col-lg-3 col-sm-3">
  <h3 align="center">Contact Information</h3>
  <p align="center">Sadia Jannat Swarna</p>
  <p align="center">Mobile Number:01760615211</p>
  <p align="center"><a href="mailto:Sadiajannatswarna7057@gmail.com">Email Id</a></p>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body> 
</head>
</html>
