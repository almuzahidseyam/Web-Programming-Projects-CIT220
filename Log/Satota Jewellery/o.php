
<?php

	$Connection = mysqli_connect('localhost','root','','log');
	
if(isset($_POST['submit'])){

$UserName = $_POST['UserName'];	
$Password = $_POST['Password'];
$Email=$_POST['Email'];	
$ProductName=$_POST['ProductName'];
$Price=$_POST['Price'];
$MobileNumber=$_POST['MobileNumber'];	
if ($UserName && $Password){
	
	echo $UserName ;
	}
	
	else {
		die( "This field can't be blank ");
	}
	
if ( $Email&& $ProductName){
	
	echo'' ;
	}
	
	else {
		die( "This field can't be blank ");
	}
	
if ($Price && $MobileNumber){
	
	echo '' ;
	}
	
	else {
		die( "This field can't be blank ");
	}
	
	if($Connection){
		
		echo " We are connected To The Database " ;
	}
	else{
	die("Database connection failed");
		
	}

	

$query = "INSERT INTO customer(UserName,Password,Email,ProductName,Price,MobileNumber) VALUES('$UserName','$Password','$Email','$ProductName','$Price','$MobileNumber')";
		
	$result= mysqli_query($Connection,$query);
	
	if(!$result){
		die('Query Failed');
		
	}
	
$query = "SELECT * FROM customer WHERE UserName ='{$UserName}'";
		
	$result= mysqli_query($Connection,$query);
	
	if(!$result){
		die('Query Failed');
		
	}

}

?>

<!doctype html>
<html>
<head>

<title>Untitled Document</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	
	<?php
	
	while($row = mysqli_fetch_assoc($result)){
	?>	
		<pre>
		<?php
		print_r($row);
		?>
		</pre>
	
	<?php
		
		
	}
	
	
	?>
	
	
	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
      
		<li class="nav-item dropdown">
				 <a  href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
					 <div class="dropdown-menu">
					 <a href="neck.php" class="dropdown-item">Necklace</a>
						  <a href="ear_ring.php" class="dropdown-item">Ear Ring</a>
						  <a href="bangle.php" class="dropdown-item">Bangles</a>
						  <a href="ring.php" class="dropdown-item">Ring</a>
					 
					 
					 
					 </div>
							<li class="nav-item active">
        <a class="nav-link" href="offers.php">Offers<span class="sr-only">(current)</span></a>
      </li>
			
			<li class="nav-item active">
        <a class="nav-link" href="about_us.php">About Us<span class="sr-only">(current)</span></a>
      </li>
		<li class="nav-item active">
        <a class="nav-link" href="userinfo.php">Contact<span class="sr-only">(current)</span></a>
      </li>
      
       </ul>
    
  </div>
</nav>
	
	<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">To Place Order</h2>
		</div>
		
		
	
	</section>
	<div class="col-lg-3 col-md-3 col-sm-3">
	<h3 align="center">Contact With</h3>
		<div class="container-fluid">
		<div class="row ">
			
		<div class="col-lg-12 col-md-12 col-12">
			<img src="images/me.jpg" height="500" width="500" class="img-fluid">
			</div>
	
		<div class="col-lg-6 col md-6 col-12">
			</div>
			</div>
		</div>
		
		<p align="center">Swarna Sen</p>
		<p align="center">Mobile Number:01835144598</p>
		<p align="center"><a href="mailto:swarnasen2000@gmail.com">Email Id</a></p>
	
	
	</div>
	
	
	
	
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	
	
</body>
</html>