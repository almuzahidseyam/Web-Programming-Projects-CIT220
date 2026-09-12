<!DOCTYPE HTML>
<html lang = "en-US">
<head>
<meta charset="UTF-8">
<title>information about students</title>
<link rel="stylesheet"href="style.css"/>
</head>
<body>
	<div id ="wrapper">
		<h1 align = "center">information about students</h1>
		<from action =""method="post">
			<table align ="center">
				<tr>
					<td colspan="2"align="center"><h2>Student Information</h2></td>
				</tr>
				<td> Batch no</td>
				<td>
					<select name ="batch"required>
						<option value = "16">16th</option>
						<option value = "17">17th</option>
						<option value = "18">18th</option>
						<option value = "19">19th</option>
						<option value = "20">20th</option>
						<option value = "21">21th</option>
					</select>
					
						</td>
					</tr>
					<td> enter id no</td>
					<td><input type="text"name="id"required/></td>
					<tr>
						</tr>
						<td colspan="2" align="center"><input type = "submit" value="information"/>
						</td>

					</table>
				
			</from>
		</div>
	</body>
	</html>
	<?php
	if(isset($_POST['submit']));
	{
		$batch = $_POST['batch'];
		$id=$_POST['id'];
		 $con=mysqli_connect('localhost','root','mysql','agfaculty');
		include('function.php');
		information($batch,$id);
	}
	?>



					