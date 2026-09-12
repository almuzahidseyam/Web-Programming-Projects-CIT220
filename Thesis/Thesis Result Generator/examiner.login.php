<?php
	include "header/header.php";
	include 'connections/dbConn.php';
	session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Students Thesis Result || Login as Teacher</title>
		<link rel="icon" href="Images/favicon.png" type = "image/png" />
		<link rel="shortcut icon" href="Images/favicon.ico"  />
		
		<link rel="stylesheet" href="examiner.login.css"/>
	</head>
	<body>
		<a href = "a.php" class = "link"><div id="admin">
			<p>Login as Admin</p>
			</div><a>
			<a href = "examiners/examiner.login.php" class="link"><div id="teacher">
				<p>Login as Teacher</p>
				</div><a>
				
				<div class = "loginCommand">
					<p>Log into Your Account</p>
				</div>
				<div id = "form">
					<form action="examiner.login.inc.php" method = "post" name = "login" id = "login" />
					<lebel class="form-text">Id</lebel></br></br>
					<input type="text" placeholder = "    Write your id here" name ="id"/></br></br>
					
					
					<lebel class = "form-text">Password</lebel></br></br>
					<input type="password" placeholder = "    Give your password here"  name ="password"/></br></br>
				</div>
				<input type="submit" name = "Submit" value = "Log in"/>
				
				
				
			</form>
			<?php
				if(isset($_GET['error'])){
					if($_GET['error'] == "emptyfields")
					{
						echo "<div class='errmsg'><p><strong>Fill all of the fields, please!</strong></p></div>";
						}
					
					
					if($_GET['error'] == "nouser")
					{
						echo "<div class='errmsg'><p><strong>Your id and password combinations don't match. Please, try with correct information!!</strong></p></div>";
					}
				}
				
			?>
			
			</body>
			
		</html>
				