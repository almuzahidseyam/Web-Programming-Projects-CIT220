<?php
include"navbar.php";
include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Status</title>

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		.sagor{

			width:400px;
			height:350px;
			background-color:black;
			margin:100px auto;
			opacity:0.8;
		}
		body{

			text-align:center;
			background-image:url("image/book.png");
			background-repeat:no-repeat;
		}

	</style>
</head>
<body>
	<?php
	if(isset($_SESSION['login_user'])){
		?>
  <form action="bookaction.php" method="post" class="sagor">
  	<br>
  	<h2 style="color:white;font-family:Lucida console">Search Book</h2>
  	<br><br>
  	<input type="text"  placeholder="Book Name" name="name" class="form-control" style="width:200px;margin:0px auto"/><br>
  	<input type="text" name="edition" class="form-control" style="margin:0px auto;width:200px" placeholder="Edition" /><br>
  	<button type="submit" class="btn btn-defult" name="submit" style="color:white;height:35px;width:70px;background-color:#367a9e">Submit</button>

</form>
<?php
}
else{
	?>
   <script type="text/javascript">
   	alert("You need to login first");
   	window.location = "ADMIN_LOGIN.php";
   </script>
<?php
}
?>
</body>
</html>