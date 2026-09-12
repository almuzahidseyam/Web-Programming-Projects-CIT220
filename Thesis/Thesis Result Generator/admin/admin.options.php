<?php
	require "header/admin.header.php";	
	?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="admin.options.css" />
	<title>Admin Choices</title>

</head>
<body>
	<div id = "selectCommand">
	<p>Select Your Choices</p>
	</div>
	
	<div id="form">
		<form action="" method = "POST" name ="option" id="login">
			<lebel class="form-text">Student/Teacher</lebel></br></br>
			
			<select name="st" id="box">
			<option value="student" class="option">Student</option>
			<option value="teacher">Teacher</option>
			</select>
			
			</br></br><lebel class="form-text">Semester</lebel></br></br>
			
			<select name="semester" id="box"></br></br>
			<option value="7th">7th</option>
			<option value="8th">8th</option>
			</select>
			
			</div>
			<input type="submit" name="enter" value="Enter"id = "enter"/>
		</form>
		<?php
if(isset($_POST['enter'])){

   $st = $_POST['st'];
   $semester = $_POST['semester'];

if($st == 'student' && $semester == '7th')
{
	header("Location:students/student.options.php");
	exit();
}
else if($st == 'student' && $semester == '8th')
{
	header("Location:students/student.options.php");
	exit();
}
else if($st == 'teacher' && $semester == '7th')
{
	header("Location:teachers/teacher.options.php");
	exit();
}

else if($st == 'teacher' && $semester == '8th')
{
	header("Location:teachers/teacher.options.php");
	exit();
}
}


?>
	
</body>
</html>
