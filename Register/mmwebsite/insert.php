
 <?php
   $name = $_POST['name'];
   $fathername = $_POST['fathername'];
   $mothername = $_POST['mothername'];
   $postalcode = $_POST['postalcode'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $gender = $_POST['gender'];
   $country = $_POST['country'];
   $district = $_POST['district'];
   $phone = $_POST['phone'];
   $bdate = $_POST['bdate'];
   $age = $_POST['age'];
   
   $conn = new mysqli('localhost','root','','register');
  if($conn->connect_error){
	   die('Connection Failed : '.$conn->connect_error);
  }
   else{
	   $stmt= $conn->prepare("insert into form(name,fathername,mothername,postalcode,address,email,password,gender,country,district,phone,bdate,age) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	   $stmt->bind_param("sssissssssiii", $name,$fathername,$mothername,$postalcode,$address,$email,$password,$gender,$country,$district,$phone,$bdate,$age);
	   $stmt->execute();
	   echo "Registration Successfull.....";
	   $stmt->close();
	   $conn->close();
   }
 ?>