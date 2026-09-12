<?php
	session_start();
	include 'connections/dbConn.php';
	if(isset($_POST['Submit']))
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		if(empty($id) || empty($password))
		{
		header("Location:examiner.login.php?error=emptyfields");
		exit();
		}
		else
		{
		$sql = mysqli_query($conn,"SELECT * FROM teacher_cit WHERE id = '$id' AND password = '$password'");
		
		if(mysqli_num_rows($sql)==0)
		{
		header("Location:examiner.login.php?error=nouser");
		exit();
		}
		else
		{
	$row = mysqli_fetch_assoc($sql);
	$_SESSION['id'] = $row['id'];
	$_SESSION['status'] = $row['status'];
	

	if($row['status']=="Supervisor")
	{

				header("Location:examiners/examiner.result.php?login=success as supervisor");
				$supervisor = "You are connected as supervisor";
				exit();
	}
	if($row['status']=="Internal 1" || $row['status']=="Internal 2" || $row['status']=="Internal 3")
	{

				header("Location:examiners/examiner.result.php?login=success as internal examiner");
				$supervisor = "You are connected as internal examiner";
				exit();
	}
	if($row['status']=="External 1" || $row['status']=="External 2")
	{

				header("Location:examiners.result.php?login=success as external examiner");
				$supervisor = "You are connected as external examiner";
				exit();
	}
	
	
	
		}
			
		}
	}
	else{
		header("Location:examiner.login.php");
		exit();
	}
	?>

