
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Teacher Registration</title>
  <link rel="stylesheet" href="teacher.reg.css">
</head>

<body>
	<div class="regform">
    <p>Teacher Registration Form</p>
  </div>

  <div id="form">

    <p>Please Fill-up the Form to Register a New Teacher!</p>

    <form action="teacher.reg.inc.php" method="POST" name="name" id="name">
	
      <lebel class="form-text">ID:</lebel></br></br>
      <input type="text" placeholder="Give an ID" name="id" /> </br></br>

      <lebel class="form-text">Full Name:</lebel><br><br>
      <input type="text" placeholder="Enter teacher's name" name="name"> <br><br>

      <lebel class="form-text">Enter a password: </lebel> <br><br>
      <input type="password" placeholder="Give a Password" name="pwd"><br><br>
	  
	  <lebel class="form-text">Repeat the password: </lebel> <br><br>
      <input type="password" placeholder="Give the Password again" name="pwd-repeat"><br><br>

      <lebel class="form-text">Email: </lebel> <br><br>
      <input type="email" placeholder="Enter teacher's Email Address" name="mail"> <br><br>

      

      <lebel class="form-text">Select Status: </lebel> <br><br>
      <select name="status" class="option">
        <option value="supervisor">Supervisor</option>
        <option value="internal1">Internal 1</option>
        <option value="internal2">Internal 2</option>
        <option value="internal3">Internal 3</option>
        <option value="external1">External 1</option>
        <option value="external2">External 2</option>
      </select> <br><br>
     
  </div>
 <input type="submit"  name="signup" value="Register" />
 
 
 <?php
				if(isset($_GET['error'])){
					if($_GET['error'] == "emptyfields")
					{
						echo "<div class='errmsg'><p><strong>Fill all of the fields, please!</strong></p></div>";
					}
					
					
					else if($_GET['error'] == "invalidid&email&name")
					{
						echo "<div class='errmsg'><p><strong>Provided id, email and name are invalid.!!</strong></p></div>";
					}
					
					else if($_GET['error'] == "invalidid&email")
					{
						echo "<div class='errmsg'><p><strong>Provided id and email are invalid.!!</strong></p></div>";
					} 
					else if($_GET['error'] == "invalidemail")
					{
						echo "<div class='errmsg'><p><strong>Provided email is invalid.!!</strong></p></div>";
					}
					else if($_GET['error'] == "invalidid")
					{
						echo "<div class='errmsg'><p><strong>Provided id is invalid.!!</strong></p></div>";
					}
					else if($_GET['error'] == "invalidname")
					{
						echo "<div class='errmsg'><p><strong>Provided name is invalid.!!</strong></p></div>";
					}
					else if($_GET['error'] == "checkpassword")
					{
						echo "<div class='errmsg'><p><strong>Repeating password is wrong!!!</strong></p></div>";
					}
					else if($_GET['error'] == "checkpassword")
					{
						echo "<div class='errmsg'><p><strong>Repeating password is wrong!!!</strong></p></div>";
					}
					/* if ($_GET['success'] == "registrationsuccess"){
					echo "<div class='errmsg'><p><strong>Registration Successful!</strong></p></div>";
					}*/
					
				}
				
			?>

</body>

</html>