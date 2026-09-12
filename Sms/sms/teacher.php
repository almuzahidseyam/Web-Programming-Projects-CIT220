<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body bgcolor="#CD853F";>
		<h1 align="center"style="color:#fff;"> Welcome Everyone</h1>
		<table align="center">
<form action="teacher.php" method="post">

		<tr>
		<th>Enter class:</th>
		<td><input type="number"name="class"required></td>
		<td colspan="2" align="right"><input type="submit"name="submit" value="Search"/>
		</tr>
</form>

</table>
<table align="center"width="55%"border="1" style="margin-top:10px;">
	<tr style="background-color:#008B8B;color:#fff;">
		<th>No</th>
		<th>Class</th>
		<th>Subject</th>
		<th>Name Of The Teacher </th>
		<th>Designation</th>
		<th>Contact No</th>
		<th>Address</th>
		<th>Email</th>
		
	</tr>
	<?php
if(isset($_POST['submit']))
		{
			include('dbcon.php');
			
		
			$class=$_POST['class'];
			$sql="SELECT * FROM `teacher` WHERE `class`='$class' ";
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
				
						<td><?php echo $data['class'];  ?></td>
						<td><?php echo $data['sub'];  ?></td>
						<td><?php echo $data['name'];  ?></td>
						<td><?php echo $data['designation'];  ?></td>
						<td><?php echo $data['cont'];  ?></td>
						<td><?php echo $data['address'];  ?></td>
						<td><?php echo $data['email'];  ?></td>
					
						
					</tr>
					<?php
					
				}
			}
			
		}
		?>
</table>
</body>
</html>