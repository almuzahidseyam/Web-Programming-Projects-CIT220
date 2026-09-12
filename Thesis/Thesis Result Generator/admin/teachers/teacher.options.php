
<!DOCTYPE HTML>
<html lang="en-US">
	
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="teacheroption.css" />
	</head>
	
	<body>
		
		
		<div class="teacheroption">
			<p>Teachers Option</p>
			
		</div>
		
		<form action="" method = "POST">
			
			
			
			<input type="submit" name='reg' class="Teacherinfo1" value="Registration for Teachers">
			<br>
			<br>
			<br>
			<input type="submit" name='info' class="Teacherinfo2" value="Teacher's information and Marks">
			
			
		</form>
		<?php
			
			if(isset($_POST['reg']))
			{
				header("Location:teacher.reg.php");
				exit();	
			}
			
			if(isset($_POST['info']))
			{
				header("Location:teacher.info.php");
				exit();	
			}
			
		?>
	</body>
	
</html>