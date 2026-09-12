<?php
	if(isset($_POST['signup'])){
		session_start(); 
		include '../../connections/dbConn.php';
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['pwd'];
		$passwordRepeat = $_POST['pwd-repeat'];
		$email = $_POST['mail'];
		$status = $_POST['status'];
		
		
		
		if(empty($id) || empty($name) || empty($password) || empty($passwordRepeat) || empty($email) || empty($status))	
		{
			header("Location:teacher.reg.php?error=emptyfields&id=".$id."name=".$name."email=".$email);
			exit();
		}
		
		
		
		else if(!preg_match("/^[a-zA-Z0-9 ]*$/", $id) && !filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name))
		{
			header("Location:teacher.reg.php?error=invalidid&email&name");
			exit();
			
		}
		
		
		
		else if(!preg_match("/^[a-zA-Z0-9 ]*$/", $id) && !filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			header("Location:teacher.reg.php?error=invalidid&email");
			exit();
			
		}
		
		
		
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			header("Location:teacher.reg.php?error=invalidemail&id=".$id."name=".$name);
			exit();
			
		}
		
		
		
		else if(!preg_match("/^[a-zA-Z0-9 ]*$/", $id))
		{
			header("Location:teacher.reg.php?error=invalidid&name=".$name."email=".$email);
			exit();
			
		}
		
		
		
		else if(!preg_match("/^[a-zA-Z0-9 ]*$/", $name))
		{
			header("Location:teacher.reg.php?error=invalidname&id=".$id."email=".$email);
			exit();
			
		}
		
		
		else if($password !== $passwordRepeat)
		{
			header("Location:teacher.reg.php?error=checkpassword&id=".$id."email=".$email);
			exit();
			
		}
		
		else
		{
			$sql = "SELECT id FROM teacher_cit WHERE id=?";
			$stmt = mysqli_stmt_init($conn);
			
			if(!mysqli_stmt_prepare($stmt, $sql))
			{
				header("Location:teacher.reg.php?error=sqlerror");
				exit();
			}
			
			else
			{
				mysqli_stmt_bind_param($stmt,"s", $id);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				
				if($resultCheck>0)
				{
					header("Location:teacher.reg.php?error=usertaken&name=".$name."email=".$email);
				}
				
				else
				
				{
					
					$sql = "INSERT INTO teacher_cit (id, name, password, email, status) VALUES(?, ?, ?, ?, ?)";
					
					$stmt = mysqli_stmt_init($conn);
					
					if(!mysqli_stmt_prepare($stmt, $sql))
					{
						header("Location:teacher.reg.php?error=sqlerror");
						exit();
					}
					else
					{
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt,"sssss", $id, $name, $password, $email, $status);
						mysqli_stmt_execute($stmt);
						header("Location:teacher.reg.php?success=registrationsuccess");
						exit();
						
					}
					
				}
				
			}
			
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}	
	else{
		header("Location:teacher.reg.php");
		exit();
	}	
	
	
	
?>






