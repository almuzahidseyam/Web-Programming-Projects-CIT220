<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Show Result</title>
</head>
<body bgcolor="#EEE8AE";>
		<h1 align="center"style="color:#CD5C5C";> Welcome Everyone</h1>
		<table align="center">
<form action="adresult.php" method="post">

		<tr style="color:#CD5C5C";>
		<th>Enter class</th>
		<td><input type="number"name="class"required></td>
		
		<th>Enter Year</th>
		<td><input type="text"name="year"required></td>
		<td colspan="2" align="right"><input type="submit"name="submit" value="Search"/>
		</tr>
</form>

</table>
<table align="center"width="55%"border="1" style="margin-top:10px;">
	<tr style="background-color:#008B8B;color:#fff;">
		<th>No</th>
		<th>Name</th>
		<th>Father's Name</th>
		<th>Mother's Name</th>
		<th>Date of Birth</th>
		<th>Marks</th>
		
	</tr>
	<?php
if(isset($_POST['submit']))
		{
			include('dbcon.php');
			
			$class=$_POST['class'];
			$year=$_POST['year'];
			$sql="SELECT * FROM `nstudent` WHERE `class`='$class' AND `year`='$year' ORDER BY `marks`DESC";
			$run=mysqli_query($con,$sql);
			if(mysqli_num_rows($run)<1)
			{
				echo"<tr><td colspan='6'>No record found</td></tr>";
				
			}
			else{
				$count=0;
				while($data=mysqli_fetch_assoc($run))
				{
					$count++;
					?>
					<tr align="center">
						<td><?php echo $count;?></td>
						<td><?php echo $data['name'];  ?></td>
						<td><?php echo $data['fname'];  ?></td>
						<td><?php echo $data['mname'];  ?></td>
						<td><?php echo $data['date'];  ?></td>
						<td><?php echo $data['marks'];  ?></td>
					</tr>
					<?php
					
				}
			}
			
		}
		?>
</table>
</body>
</html>