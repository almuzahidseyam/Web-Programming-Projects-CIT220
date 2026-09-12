<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Welcome Students</title>
	<link rel ="stylesheet" href="student.css"  />
</head>
<body >
<div id="wrapper">
	<h1 align="center"> Welcome Students</h1>
	<form action="student.php" method="post">
		<table align="center">
			<tr>
			<td colspan="2"align="center"><h2>Student Information</h2></td>
			</tr>
			<tr>
			<td >Choose class</td>
			<td>
			<select name="class" required>
			<option value="6">6th</option>
			<option value="7">7th</option>
			<option value="8">8th</option>
			<option value="9">9th </option>
			<option value="10">10th</option>
			
			
			</select>
			
			</td>
			</tr>
			<tr>
			<td >Enter Roll No</td>
			<td> <input type="text" name="rollno" required/></td>
			<tr>
			</tr>
			<td colspan="2"align="center"><input type="submit" name="submit" value="showdetails" />
			
</td>
			
			
			<h3 align="left"><a href="index.php">Back</a></h3>
			</tr>
		    
		</table>
	</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{

	$class =$_POST['class'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `class`='$class'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0) 
	{
		
		$data=mysqli_fetch_assoc($run);
		?>
		<div id="stu">
		<table align="center">
		 <tr>
		    <th colspan="3">Student Details</th>
		 </tr>
		<tr>
		    <td rowspan="7"><img src="dataimg/<?php echo $data['image'];?> " style="max-height:150px;max-width:120px;"/></td>
			<th>Roll no:</th>
			<td><?php echo $data['rollno'];?></td>
			
		 </tr>
		 <tr>
		    
			<th>class:</th>
			<td><?php echo $data['class'];?></td>
			
		 </tr>
		<tr>
		    
			<th>Name:</th>
			<td><?php echo $data['name'];?></td>
			
		 </tr>
		 <tr>
		    
			<th>Father's Name: </th>
			<td><?php echo $data['fname'];?></td>
			
		 </tr>
		 <tr>
		    
			<th>Mother's Name: </th>
			<td><?php echo $data['mname'];?></td>
			
		 </tr>
		 <tr>
		    
			<th>phone no:</th>
			<td><?php echo $data['pcont'];?></td>
			
		 </tr>
		 <tr>
		    
			<th>Address:</th>
			<td><?php echo $data['address'];?></td>
			
		 </tr>
		 
		
		</table>
		
		</div>
		
		
		<?php
	}
	else
	{
		echo "<script>alert('No student found.');</script>";
		
	}
	
		
}
?>
