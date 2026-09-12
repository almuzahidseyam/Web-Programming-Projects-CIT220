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
	include('dbcon.php');
		
		$sid=$_GET['sid'];
		$sql="SELECT * FROM `teacher` WHERE `id`='$sid'";
        $run=mysqli_query($con,$sql);
		
		$data=mysqli_fetch_assoc($run);

?>
<form action="tupdatedata.php" method="post"enctype="multipart/form-data">
		<table align="center">
		<tr><td>Name:</td><td><input type="text"name="name" value=<?php echo $data['name'];?>></td>
		</tr>
		<tr><td>Contact No:</td><td><input type="text"name="cont" value=<?php echo $data['cont'];?>></td>
		</tr>
		
		<tr><td>Email:</td><td><input type="text"name="email" value=<?php echo $data['email'];?>></td>
		</tr>
		<tr><td>Address:</td><td><input type="text"name="address"value=<?php echo $data['address'];?>></td>
		</tr>
		<tr><td>Class:</td><td><input type="number"name="class"value=<?php echo $data['class'];?>></td>
		</tr>
		<tr><td>Subject:</td><td><input type="text"name="sub" value=<?php echo $data['sub'];?>></td>
		</tr>
		<tr><td>Designation:</td><td><input type="text"name="designation"value=<?php echo $data['designation'];?>></td>
		</tr>
		<tr><td>Salary:</td><td><input type="text"name="salary"value=<?php echo $data['salary'];?>></td>
		</tr>
		</tr>
		<tr><td>Image:</td><td><input type="file"name="img"></td>
		</tr>
		<tr><td colspan="2" align="right">
		<input type="hidden"name="sid" value="<?php echo $data['id'];?>"/>
		<input type="submit"name="submit" value="Submit"/>
		</td>
		</tr>
	</table>
</form>			
</body>
</html>
