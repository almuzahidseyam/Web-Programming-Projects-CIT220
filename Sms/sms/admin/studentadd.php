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
<form action="studentadd.php" method="post"enctype="multipart/form-data">
		<table align="center">
		<tr><td>Roll no:</td><td><input type="text"name="rollno" required ></td>
		</tr>
		<tr><td>Name:</td><td><input type="text"name="name" required></td>
		</tr>
		<tr><td>Class:</td><td><input type="number"name="class" required></td>
		</tr>
		<tr><td>Father's Name:</td><td><input type="text"name="fname" required></td>
		</tr>
		<tr><td>Mother's Name:</td><td><input type="text"name="mname"required></td>
		</tr>
		<tr><td>Parents Contact No:</td><td><input type="text"name="pcont" required></td>
		</tr>
		<tr><td>Address:</td><td><input type="text"name="address"required></td>
		</tr>
		<tr><td>Religion:</td><td><input type="text"name="religion" required></td>
		</tr>
		<tr><td>Date of Birth:</td><td><input type="text"name="date"required></td>
		</tr>
		<tr><td>Marks:</td><td><input type="number"name="marks"></td>
		</tr>
		<tr><td>Result:</td><td><input type="text"name="result"></td>
		</tr>
		<tr><td>Year:</td><td><input type="text"name="year"required></td>
		</tr>
		
		<tr><td>Image:</td><td><input type="file"name="img"></td>
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
			
			$rollno=$_POST['rollno'];
			$name=$_POST['name'];
			$class=$_POST['class'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$pcont=$_POST['pcont'];
			$address=$_POST['address'];
			$religion=$_POST['religion'];
			$date=$_POST['date'];
			$marks=$_POST['marks'];
			$result=$_POST['result'];
			$year=$_POST['year'];
			$imagename=$_FILES['img'] ['name'];
			$tempname=$_FILES['img'] ['tmp_name'];
			
			move_uploaded_file($tempname,"../dataimg/$imagename");
			
			$qry="INSERT INTO `student`(`rollno`, `class`, `name`, `fname`, `mname`, `pcont`, `address`, `religion`, `date`,`marks`, `result`, `year`,`image`) VALUES ('$rollno','$class','$name','$fname','$mname','$pcont','$address','$religion','$date','$marks','$result','$year','$imagename')";
			
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Inserted Successfully');</script>
			<?php	
			
			}
			
			
		}


?>

