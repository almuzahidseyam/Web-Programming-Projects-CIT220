<?php
	session_start();
	include 'connections/dbConn.php';
	if(isset($_POST['Submit']))
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		if(empty($id) || empty($password))
		{
			header("Location:a.php?error=emptyfields");
			exit();
		}
		else
		{
			$sql = mysqli_query($conn,"SELECT * FROM users WHERE id = '$id' AND password = '$password'");
			
			if(mysqli_num_rows($sql)==0)
			{
				header("Location:a.php?error=nouser");
				exit();
			}
			else
			{
				$row = mysqli_fetch_assoc($sql);
				$_SESSION['id'] = $row['id'];
				$_SESSION['status'] = $row['status'];
				
				if($row['status']=="admin")
				{
					
					header("Location:admin/admin.options.php?login=success as admin");
					$admin = "You are connected as admin";
					exit();
				}
				
			}
			
		}
	}
	else{
		header("Location:a.php");
		exit();
	}
?>

