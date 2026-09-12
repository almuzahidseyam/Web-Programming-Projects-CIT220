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
		$sql="SELECT * FROM `student` WHERE `id`='$sid'";
        $run=mysqli_query($con,$sql);
		
		$data=mysqli_fetch_assoc($run);

?>
<form action="updatedata.php" method="post"enctype="multipart/form-data">
		<table align="center">
		<tr><td>Roll no:</td><td><input type="text"name="rollno" value=<?php echo $data['rollno'];?> ></td>
		</tr>
		<tr><td>Name:</td><td><input type="text"name="name" value=<?php echo $data['name'];?>></td>
		</tr>
		<tr><td>Class:</td><td><input type="number"name="class"value=<?php echo $data['class'];?> ></td>
		</tr>
		<tr><td>Father's Name:</td><td><input type="text"name="fname" value=<?php echo $data['fname'];?>></td>
		</tr>
		<tr><td>Mother's Name:</td><td><input type="text"name="mname"value=<?php echo $data['mname'];?>></td>
		</tr>
		<tr><td>Parents Contact No:</td><td><input type="text"name="pcont" value=<?php echo $data['pcont'];?>></td>
		</tr>
		<tr><td>Address:</td><td><input type="text"name="address"value=<?php echo $data['address'];?>></td>
		</tr>
		<tr><td>Religion:</td><td><input type="text"name="religion"value=<?php echo $data['religion'];?> ></td>
		</tr>
		<tr><td>Date of Birth:</td><td><input type="text"name="date"value=<?php echo $data['date'];?>></td>
		</tr>
		<tr><td>Marks:</td><td><input type="number"name="marks"value=<?php echo $data['marks'];?>></td>
		</tr>
		<tr><td>Result:</td><td><input type="text"name="result"value=<?php echo $data['result'];?>></td>
		</tr>
		<tr><td>Year:</td><td><input type="text"name="year"value=<?php echo $data['year'];?>></td>
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
