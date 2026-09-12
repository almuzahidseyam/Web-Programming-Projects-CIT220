<?php
	
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$number = $_POST["number"];
	$gender = $_POST["gender"];
	$robot = $_POST["robot"];
	
	
	//Database Connection
	
	$conn = new mysqli('localhost','root','','food');
	if($conn->connect_error){
		die('connection Failed : ' . $conn->connect_error);
	}
	else{
		
		$stmt = $conn->prepare("insert into registration(firstName,lastName,email,password,number,gender,robot)
				values(?,?,?,?,?,?,?)");
				
		$stmt-> bind_param("ssssiss",$firstName,$lastName,$email,$password,$number,$gender,$robot);
		$stmt->execute();
		echo "registration Successfully....";
		$stmt->close();
		$conn->close();
		
	}
?>