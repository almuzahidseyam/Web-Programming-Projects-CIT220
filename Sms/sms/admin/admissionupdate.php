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

<table align="center">
<form action="admissionupdate.php" method="post">

		<tr>
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
		<th>Edit</th>
	</tr>
<?php
if(isset($_POST['submit']))
		{
			include('dbcon.php');
			
			$class=$_POST['class'];
			$year=$_POST['year'];
			$sql="SELECT * FROM `nstudent` WHERE `class`='$class' AND `year`LIKE '%$year%' ";
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
						<td><?php echo $data['name'];  ?></td>
						<td><?php echo $data['fname'];  ?></td>
						<td><?php echo $data['mname'];  ?></td>
						<td><a href="admissionform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
					</tr>
					<?php
					
				}
			}
			
		}
		?>
</table>
