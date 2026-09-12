<?php
$conn = mysqli_connect('localhost','root','','food');
mysqli_select_db($conn,"food");

if(isset($_POST['submit'])){

   $username=$_POST['name'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $password=$_POST['pwd'];
    $contactno=$_POST['contactno'];

   $query="INSERT INTO order(username,email,address,password,contactno) VALUES('$username','$email','$address','$password','$contactno')";
   $ss = mysqli_query($conn,$query);
   if($ss){
   echo "DATA INSEETED";
   
 }
   
  

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
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
        <a class="nav-link" href="search.php">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>

  </div>
</nav>


  
<body>

<div class="container">
  
  <form action="order.php" method="post">
    <div class="form-group">
      <label for="name">User Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="address" class="form-control" id="address" placeholder="Enter Your Address" name="address">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pwd">
    </div>
       <div class="form-group">
      <label for="pwd">Contact No</label>
      <input type="contactno" class="form-control" id="contactno" placeholder="Enter your Contact No" name="contactno">
    </div>
    
    
    
    <button type="submit" name="submit" class="btn btn-primary">Order</button>
  </form>
</div>

</body>
</html>


