
<?php

include"connection.php";

?>


<!DOCTYPE html>
<html>
	<head>
		<title>	Registration</title>
		<link rel="stylesheet" type="text/css"  href="style.css">
		<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>
		
                <nav class="navbar navbar-Inverse" style="background-color:black;color:black; height:65px;width:1364px">
                	<div class="container-fluid">
                <div class="navbar-header">
				<a class="navbar-brand active"
				style="color:white;background-color:green;height:65px" >ONLINE LIBRARY MANAGEMENT  SYSTEM</a>
                   </div>
				
					<ul class="nav navbar-nav"  >
						<li><a style="color:white" href="index.php" class="glyphicon glyphicon-home"> HOME</a></li>
				
						<li><a style="color:white" href="book.php" class="glyphicon glyphicon-book"> BOOKS</a></li>
						<li><a href="feedback.php"><span style="color:white;margin-top:3px" class="glyphicon glyphicon-feedback">FEEDBACK</span></a></li>
					</ul>


					<ul class="nav navbar-nav navbar-right">
						
						<li><a style="color:white" href="STUDENT_LOGIN.php"><span class="glyphicon glyphicon-log-in">   LOGIN</span></a></li>
					
				   </ul>
				</div>
				</nav>
		

		<section>
			<div class="reg_img">
					<br>

					<div class="box2">
				    <br>
					<h1 style="font-family:Lucida Console;font-size:35px;text-align:center;font-color:white">Library <br>Management System</h1>
					<h1 style="font-family:Lucida Console;font-size:25px;text-align:center;font-color:white">User Registration Form</h1>
					<form action=""method="post" name="Registration">
						<br>

						<div class="login">

						<input class="form-control" type="text" name="first" placeholder="First Name" requred=""/><br>

						<input class="form-control"
						type="text" name="last" placeholder="Last Name" requred=""/><br>

						<input class="form-control" type="text" name="roll" placeholder="ID No." requred=""/><br>
                        
                        <input class="form-control" type="text" name="username" placeholder="Username" requred=""/><br>


						<input class="form-control" type="password" name="password" placeholder="Password"/><br>

						<input class="form-control" type="text" name="email" placeholder="Email" requred=""/><br>


						<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:white ;background-color:#367a9e;height:35px;width:70px">

					</div>
					</form>
				    <br><br>
				     
         
					</div>
				</div>
		</section>
		<?php

           if(isset($_POST['submit'])){

           	$count= 0;
           	$sql= "SELECT username FROM `student`";
           	$res=mysqli_query($db,$sql);

          		while($row=mysqli_fetch_assoc($res)){

          			if($row['username']==$_POST['username']){

          				$count=$count+1;
          			}
          		}
                
                if($count==0){

          		mysqli_query($db,"INSERT INTO `student` VALUES ('$_POST[first]','$_POST[last]','$_POST[roll]','$_POST[username]','$_POST[password]','$_POST[email]');");

         ?>

         <script type="text/javascript">
         	alert("Registration Successful!!");
         	
            		
            window.location="STUDENT_LOGIN.php";
            	 
            </script>
         <?php

            }

            else{
                
                ?>

             
      	    <script type="text/javascript">
         	alert("the username is already exist!!");
            </script>

         <?php   }

         
 }
 ?>
        	 
		
	</body>
</html>