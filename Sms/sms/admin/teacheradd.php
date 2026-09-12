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
<form action="teacheradd.php" method="post"enctype="multipart/form-data">
		<table align="center">
		
		<tr><td>Name:</td><td><input type="text"name="name" required></td>
		</tr>
		<tr><td>Contact No:</td><td><input type="text"name="cont" required></td>
		</tr>
		
		<tr><td>Email:</td><td><input type="text"name="email" required></td>
		</tr>
		<tr><td>Address:</td><td><input type="text"name="address"required></td>
		</tr>
		<tr><td>Class:</td><td><input type="number"name="class"required></td>
		</tr>
		<tr><td>Subject:</td><td><input type="text"name="sub" required></td>
		</tr>
		<tr><td>Designation:</td><td><input type="text"name="designation"required></td>
		</tr>
		<tr><td>Salary:</td><td><input type="text"name="salary"required></td>
		</tr>
		</tr>
		<tr><td>Image:</td><td><input type="file"name="img"></td>
		</tr>
		<tr><td>Year:</td><td><input type="text"name="year"required></td>
		</tr>
		<tr><td colspan="2" align="right"><input type="submit"name="submit" value="Submit"/></td>
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
			$cont=$_POST['cont'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$class=$_POST['class'];
			$sub=$_POST['sub'];
			$designation=$_POST['designation'];
			$salary=$_POST['salary'];
			$year=$_POST['year'];
			$imagename=$_FILES['img'] ['name'];
			$tempname=$_FILES['img'] ['tmp_name'];
			
			move_uploaded_file($tempname,"../dataimg/$imagename");
			
			$qry="INSERT INTO `teacher`(`name`, `cont`, `email`, `address`, `class`, `sub`, `designation`,`salary`,`image`,`year`) 
			VALUES ('$name','$cont','$email','$address','$class','$sub','$designation','$salary','$imagename','$year')";
			
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Inserted Successfully');</script>
			<?php	
			
			}
			
			
		}


?>