<?php
	
	$ChildName = $_POST["ChildName"];
	$fatherName = $_POST["fatherName"];
	$MotherName = $_POST["MotherName"];
	$GrandFatherName = $_POST["GrandFatherName"];
	$GrandMotherName = $_POST["GrandMotherName"];
	
	
	
	//Database Connection
	
	$db = new mysqli('localhost','root','','generation');
	if($db->connect_error){
		die('connection Failed : ' . $db->connection_error);
	}
	else{
		
		$stmt = $db->prepare("insert into generation(ChildName,fatherName,MotherName,GrandFatherName,GrandMotherName)
				values(?,?,?,?,?)");
				
		$stmt-> bind_param("sssss", $ChildName,$fatherName,$MotherName,$GrandFatherName,$GrandMotherName);
		
		$stmt->execute();
		echo "insertion Successful....";
		$stmt->close();
		$db->close();
		
	}
?>