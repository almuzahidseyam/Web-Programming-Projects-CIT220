
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN</title>
</head>

<body>
	
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
		<h4 class="text-center">You have to put the correct information</h4>
		<h6 class="text-center">Otherwise the database record shouldn't be granted..please put the Product Name and Price carefully for your betterment</h6>
		</div>
		
	</section>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	

<form  action="o.php" method="post">
	<div class="container">
		<div class="form-group">
		  <label for="name">User Name</label>
			  <input class="form-control" type="text" id="name" name="UserName" placeholder="Enter name">
		  </div>
		  
		  <div class="form-group">
		  <label for="password">Password</label>
			  <input class="form-control" type="password" id="password" name="Password" placeholder="Enter password">
		 </div>
		    <div class="form-group">
		  <label for="Email">User Email</label>
			  <input class="form-control" type="email" id="Email" name="Email" placeholder="Enter Email">
		  </div>
		  
			  
		  <div class="form-group">
		  <label for="name">Product Name</label>
			  <input class="form-control" type="text" id="name" name="ProductName" placeholder="Enter Product name">
			  
		  </div>
			  
		  <div class="form-group">
		  <label for="price">Product price</label>
			  <input class="form-control" type="number" id="price" name="Price" placeholder="Enter price">
		  </div>
		 <div class="form-group">
                <label>Enter Mobile Number</label>
                <input class="form-control" type="text" name="MobileNumber" placeholder="Number">
            </div>
			  
		  <input type="submit" name="submit" value="submit">
</form>
</body>
</html>