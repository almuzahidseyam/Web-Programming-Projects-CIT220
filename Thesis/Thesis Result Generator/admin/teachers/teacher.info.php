<?php
	session_start();
	include '../../connections/dbConn.php';
	$sql = "select * FROM  teacher_cit";	
	$result = mysqli_query($conn, $sql);	
	$resultCheck = mysqli_num_rows($result);	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Teacher Information</title>
		<link rel="stylesheet" href="teacher.info.css" />
	</head>
	<body>
		<table align = "center" border = "1px" style = "width:600px; line-height:40px;">
			<tr>
				<th colspan= "5">Teachers record</th>	
			</tr>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>password</th>
				<th>email</th>
				<th>status</th>
			</tr>	
			
			<?php
				if($resultCheck>0)
				{
					
					while($row=mysqli_fetch_assoc($result))
					{
					?>	
			
					<tr>
						<td><?php echo $row['id']?></td>	
						<td><?php echo $row['name']?></td>	
						<td><?php echo $row['password']?></td>	
						<td><?php echo $row['email']?></td>	
						<td><?php echo $row['status']?></td>	
					</tr>
					
				<?php	}
					
				}
				
			?>
			
			
		</table>	
	</body>
</html>