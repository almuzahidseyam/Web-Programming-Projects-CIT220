<?php
	if(isset($_POST['Submit'])){
		session_start(); 
		include '../connections/dbConn.php';
		
		$id = $_POST['stdnt_id'];
		$mark = $_POST['mark'];
		
		
		
		
		if(empty($id) || empty($mark))	
		{
			header("Location:examiner.result.php?error=emptyfields&id=".$id);
			exit();
		}
		
		
		else if(!preg_match("/^[a-zA-Z0-9]*$/", $id) && !preg_match("/^[0-9]*$/", $mark))
		{
			header("Location:examiner.result.php?error=invalidid&mark");
			exit();
			
		}
		
		
		
		else if(!preg_match("/^[0-9]*$/", $mark))
		{
			header("Location:examiner.result.php?error=invalidmark&id=".$id);
			exit();
			
		}
		
		
		
		else if(!preg_match("/^[a-zA-Z0-9]*$/", $id))
		{
			header("Location:examiner.result.php?error=invalidid");
			exit();
			
		}
		
	    else if($mark>100)
		{
	        header("Location:examiner.result.php?error=invalidmark");
			exit();
		}
		
		else
		{
			$sql = "SELECT student_id FROM result WHERE student_id=?";
			$stmt = mysqli_stmt_init($conn);
			
			if(!mysqli_stmt_prepare($stmt, $sql))
			{
				header("Location:examiner.result.php?error=sqlerror");
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
				$sql = "INSERT INTO result(supervisor) VALUES(?)";
					
					$stmt = mysqli_stmt_init($conn);
					
					if(!mysqli_stmt_prepare($stmt, $sql))
					{
						header("Location:examiner.result.php?error=sqlerror");
						exit();
					}
					else
					{
						
						mysqli_stmt_bind_param($stmt,"s", $mark);
						mysqli_stmt_execute($stmt);
						header("Location:examiner.result.php?success=markgivingsuccess");
						exit();
						
					}	
				}
				
				else
				
				{
					
				header("Location:examiner.result.php?error=unsetid");
				exit();	
					
				}
				
			}
			
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	
else{
		header("Location:examiner.result.php");
		exit();
	}	
	
	
	
?>






