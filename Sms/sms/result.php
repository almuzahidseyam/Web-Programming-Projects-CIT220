<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body bgcolor="#FAB72A";>
		<h1 align="center"style="color:red"> Welcome Everyone</h1>
		<table align="center">
<form action="result.php" method="post">

		<tr font-size="25px";>
		<th>Enter class:</th>
		<td><input type="number"name="class"required></td>
		
		<th>Enter Year:</th>
		<td><input type="text"name="year"required></td>
		<td colspan="2" align="right"><input type="submit"name="submit" value="Search"/>
		</tr>
</form>

</table>
<table align="center"width="57%"border="1" style="margin-top:10px;">
	<tr style="background-color:#008B8B;color:#fff;">
		<th>No</th>
		<th>Roll No</th>
		<th>Name</th>
	    <th>Father's Name</th>
		<th>Mother's Name</th>
		<th>Marks</th>
		<th>Result</th>
	</tr>
	<?php
if(isset($_POST['submit']))
		{
			include('dbcon.php');
			
			$class=$_POST['class'];
			$year=$_POST['year'];
			$sql="SELECT * FROM `student` WHERE `class`='$class' AND `year`LIKE '%$year%' ORDER BY `marks`DESC";
			$run=mysqli_query($con,$sql);
			if(mysqli_num_rows($run)<1)
			{
				echo"<tr><td colspan='7'>No record found</td></tr>";
				
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
						<td><?php echo $data['name'];  ?></td>
						<td><?php echo $data['fname'];  ?></td>
						<td><?php echo $data['mname'];  ?></td>
						<td><?php echo $data['marks'];  ?></td>
						<td><?php echo $data['result'];  ?></td>
						
					</tr>
					<?php
					
				}
			}
			
		}
		?>
</table>
</body>
</html>