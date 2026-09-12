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
        <a class="nav-link" href="search.php">Search</a>
      </li>
      

    
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>

  </div>

</nav>
<link rel="stylesheet" href="https://maxcdn.bootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>




<html>
<head>
	<title>Search Customer</title>
	<style>
		.search{

			background-color: whitesmoke;
		}
		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
</head>
<body>
	<div class="search">
	
	<center>
		<h1>Search Customer</h1>
		<form action=""method="POST">
			<input type="text" name = "username" placeholder="Enter username to search"/><br/>
			<input type="submit" name="search" value="Search Data">

		 </form>
		 <?php
		  $con=mysqli_connect('localhost','root','','food');
		  if(isset($_POST['search']))
		  {
		  	$username = $_POST['username'];

		  	$query = "SELECT * FROM forder where username='$username'";
		  	$query_run = mysqli_query($con,$query);

		  	while($row = mysqli_fetch_array($query_run))
		  	{

		  		?>
		  		<form action="" method="POST">
		  			<input type="hidden" name="username" value="<?php echo $row['username'] ?>" />
		  			
		  			<input type="text" name="email" value="<?php echo $row['email'] ?>"/>
		  			<input type="text" name="address" value="<?php echo $row['address'] ?>"/>
		  			<input type="text" name="password" value="<?php echo $row['password'] ?>"/>
		  			<input type="text" name="contactno" value="<?php echo $row['contactno'] ?>"/>
		  			
		  			
		  		</form>
		  		<?php
		  	}
		  }

		 ?>
	</center>
	</div>
</body>
	
</html>