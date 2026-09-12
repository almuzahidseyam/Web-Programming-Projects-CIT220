<?php

	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}

?>
<?php
include('header.php');
include('title.php');
?>
<div id="add">
<form action="admissionadd.php" method="post"enctype="multipart/form-data">
		<table align="center">
		<tr><td>Name:</td><td><input type="text"name="name" required></td>
		</tr>
		<tr><td>Father's Name:</td><td><input type="text"name="fname" required></td>
		</tr>
		<tr><td>Mother's Name:</td><td><input type="text"name="mname"required></td>
		</tr>
		<tr><td>class:</td><td><input type="number"name="class" required></td>
		</tr>
		<tr><td>Parents Contact No:</td><td><input type="text"name="pcont" required></td>
		</tr>
		<tr><td>Address:</td><td><input type="text"name="address"required></td>
		</tr>
		<tr><td>Date of Birth:</td><td><input type="text"name="date"required></td>
		</tr>
		<tr><td>Marks:</td><td><input type="number"name="marks"></td>
		</tr>
		<tr><td>Year:</td><td><input type="text"name="year"required></td>
		</tr>
		
		<tr><td colspan="2" align="right"><input type="submit"name="submit" value="Submit"/></td>
		</tr>
	</table>
</form>			
</body>
</html>
</div>

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
			$marks=$_POST['marks'];
			$year=$_POST['year'];
			$qry="INSERT INTO `nstudent`(`name`, `fname`, `mname`, `class`,`pcont`, `address`,`date`,`marks`,`year`) VALUES ('$name','$fname','$mname','$class','$pcont','$address','$date','$marks','$year')";
			
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Inserted Successfully');</script>
			<?php	
			
			}
			
			
		}


?>

