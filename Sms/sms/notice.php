<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body bgcolor="#CD853F";>
		<h1 align="center" style="color:#fff;"> Welcome Everyone</h1>
		<table align="center">
<form action="notice.php" method="post">

		<tr>
		<th>Enter Year</th>
		<td><input type="text"name="year"required></td>
		<td colspan="2" align="right"><input type="submit"name="submit" value="Search"/>
		</tr>
</form>

</table>
<table align="center"width="60%"border="1" style="margin-top:10px;">
	<tr style="background-color:#008B8B;color:#fff;">
		<th>No</th>
		<th>Roll No</th>
		<th>Class</th>
		<th>Name Of The Student </th>
		<th>Father's Name</th>
		<th>Mother's Name</th>
		<th>Parent Contact No</th>
		<th>Address</th>
		<th>Religion</th>
		<th>Date of birth</th>
	</tr>
	<?php
if(isset($_POST['submit']))
		{
			include('dbcon.php');
			
			
			$year=$_POST['year'];
			$sql="SELECT * FROM `student` WHERE `year`LIKE '%$year%'ORDER BY `class` ";
			$run=mysqli_query($con,$sql);
			if(mysqli_num_rows($run)<1)
			{
				echo"<tr><td colspan='5'>No record found</td></tr>";
				
			}
			else{
				$count=0;
				while($data=mysqli_fetch_assoc($run))
				{
					$count++;
					?>
					<tr align="center">
						<td><?php echo $count;?></td>
				
						<td><?php echo $data['rollno'];  ?></td>
						<td><?php echo $data['class'];  ?></td>
						<td><?php echo $data['name'];  ?></td>
						<td><?php echo $data['fname'];  ?></td>
						<td><?php echo $data['mname'];  ?></td>
						<td><?php echo $data['pcont'];  ?></td>
						<td><?php echo $data['address'];  ?></td>
						<td><?php echo $data['religion'];  ?></td>
						<td><?php echo $data['date'];  ?></td>
						
					</tr>
					<?php
					
				}
			}
			
		}
		?>
</table>
</body>
</html>