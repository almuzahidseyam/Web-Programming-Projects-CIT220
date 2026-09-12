<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Information New Student</title>
	<link rel ="stylesheet" href="admission.css"  />
</head>
<body>
<h2 align="center">New 6th Student add</h2>
<form action="admission.php" method="post">
	<table align="center" width="30%">
	<tr><td>Name:</td><td><input type="text"name="name" required></td>
		</tr>
		<tr><td>Father's Name:</td><td><input type="text"name="fname" required></td>
		</tr>
		<tr><td>Mother's Name:</td><td><input type="text"name="mname"required></td>
		</tr>
		<tr><td>Class:</td><td><input type="number"name="class"value="6" ></td>
		</tr>
		<tr><td>Parents Contact No:</td><td><input type="text"name="pcont" required></td>
		</tr>
		<tr><td>Address:</td><td><input type="text"name="address"required></td>
		</tr>
	   <tr><td>Date of birth:</td><td><input type="text"name="date"required></td>
		</tr>
		<tr><td>Year:</td><td><input type="text"name="year"required></td>
		</tr>
	 <tr><td colspan="2" align="center"><input type="submit"name="submit" value="Submit"/></td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
		if(isset($_POST['submit']))
		{
			include('dbcon.php');
			$name=$_POST['name'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$class=$_POST['class'];
			$pcont=$_POST['pcont'];
			$address=$_POST['address'];
			$date=$_POST['date'];
			$year=$_POST['year'];
			
			$qry="INSERT INTO `nstudent`(`name`, `fname`, `mname`,`class`,`pcont`,`address`,  `date`,`year`) VALUES ('$name','$fname','$mname','$class','$pcont','$address','$date','$year')";
			
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Inserted Successfully');</script>
			<?php	
			
			}
			
			
		}


?>