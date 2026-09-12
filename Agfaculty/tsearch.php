<html>
<head>
	<title>
		search data 
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
		<h1>search data</h1>
		<form action=""method="POST">
			<input type="text" name = "tName" placeholder="enter Teachers Name to search"/><br/>
			<input type="submit" name="search" value="search data">

		 </form>
		 <?php
		  $con=mysqli_connect('localhost','root','mysql','agfaculty');
		  if(isset($_POST['search']))
		  {
		  	$tName = $_POST['tName'];

		  	$query = "SELECT * FROM department where tName='$tName'";
		  	$query_run = mysqli_query($con,$query);

		  		while($row = mysqli_fetch_array($query_run))
		  	{

		  		?>
		  		<form action="" method="POST">
		  			<input type="hidden" name="SL" value="<?php echo $row['Sl'] ?>" />
		  			<input type="text" name="Department" value="<?php echo $row['Department'] ?>" />
		  			<input type="hidden" name="tName" value="<?php echo $row['tName'] ?>"/>
		  			<input type="text" name="designation" value="<?php echo $row['designation'] ?>"/>
		  			<input type="text" name="email" value="<?php echo $row['email'] ?>"/>
		  			<input type="text" name="Contact" value="<?php echo $row['Contact'] ?>"/>
		  			<input type="text" name="Password" value="<?php echo $row['Password'] ?>"/>
		  			
		  		</form>
		  		<?php
		  	}
		  }

		 ?>
	</center>
</body>
	
</html>