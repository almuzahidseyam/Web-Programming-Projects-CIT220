<html>
<head>
	<title>
		Search Student Information 
	</title>
	<style>
		body{
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

	<center>
		<h1>Search Student Information</h1>
		<form action=""method="POST">
			<input type="text" name = "id" placeholder="enter id to search"/><br/>
			<input type="submit" name="search" value="search data">

		 </form>
		 <?php
		  $con=mysqli_connect('localhost','root','mysql','agfaculty');
		  if(isset($_POST['search']))
		  {
		  	$id = $_POST['id'];

		  	$query = "SELECT * FROM stinformation where id='$id'";
		  	$query_run = mysqli_query($con,$query);

		  	while($row = mysqli_fetch_array($query_run))
		  	{

		  		?>
		  		<form action="" method="POST">
		  			<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
		  			<input type="text" name="batch" value="<?php echo $row['batch'] ?>" />
		  			<input type="text" name="name" value="<?php echo $row['name'] ?>"/>
		  			<input type="text" name="gmail" value="<?php echo $row['gmail'] ?>"/>
		  			<input type="text" name="phnno" value="<?php echo $row['phnno'] ?>"/>
		  			<input type="text" name="address" value="<?php echo $row['address'] ?>"/>
		  			<input type="text" name="hall" value="<?php echo $row['hall'] ?>"/>
		  			<input type="text" name="semester" value="<?php echo $row['semester'] ?>"/>
		  			
		  		</form>
		  		<?php
		  	}
		  }

		 ?>
	</center>
	 
</body>
	
</html>