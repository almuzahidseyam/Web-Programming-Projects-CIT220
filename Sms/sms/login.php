<?php
session_start();
if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Admin login</title>
	<link rel ="stylesheet" href="login.css"  />
</head>
<body>
	<div id="wrapper">
		<h1 align="center">Admin Login</h1>
	<form action="login.php" method="post">
	<table align="center">
		<tr><td>Username:</td><td><input type="text"name="username" /></td>
		</tr>
		<tr><td>Password:</td><td><input type="password"name="password"/></td>
		</tr>
	<tr >
	<td colspan="2" align="center"><input type="submit" name="login"value="login"/></td>
	</tr>	
	</table>
	</form>
	
	</div>
	
</body>
</html>
<?php

	include('dbcon.php');
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$qry="SELECT * FROM `admin` WHERE `username` ='$username' AND `password` ='$password'";
		$run=mysqli_query($con,$qry);
		
		$row=mysqli_num_rows($run);
		if($row<1)
		{
			?>
			<script type="text/javascript">
			alert('Username or Password not match!!');
			window.open('login.php','_self');
			</script>
			<?php
			
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
		}
		
	}
		
		?>