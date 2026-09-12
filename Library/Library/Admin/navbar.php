<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css"  href="style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		
		.user{ 
			color:white;
			float:right;
			margin-right:20px;
			margin-top:18px;
			font-size:15px;
			font-weight:bold;
		}
		



	</style>
</head>
<body>

                <nav class="navbar navbar-Inverse" style="background-color:#222;color:black; height:65px;width:1364px">
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

                  <?php

                               if(isset($_SESSION['login_user'])){
                               	?>

                               	<ul class="nav navbar-nav"> 
                                <li><a href="profile.php"><span style="color:white;margin-top:3px" class="glyphicon glyphicon-profile">PROFILE</span></a>

                               	</ul>  


                               	<?php
                                echo"<div class='user'>";

                               	echo "Welcome ".$_SESSION['login_user'];
                               	echo "</div>";
                               	?>

                                      <ul class="nav navbar-nav">
                               	      <li><a href="student.php"><span style="color:white; margin-top:3px" class="glyphicon glyphicon-STUDENT-INFORMATION">STUDENT-INFORMATION</span></a></li>  
                                      </ul>
                                      <ul class="nav navbar-nav navbar-right">
                                         <li><a style="color:white;float:right;margin-top:3px;margin-right:20px" href="logout.php"> <span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>

                                         
                                     </ul>
                               

          						<?php
          					}

          						else{

									?>

									<ul class="nav navbar-nav navbar-right">
									
									<li><a style="color:white" href="ADMIN_LOGIN.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>

									<li><a style="color:white" href="registration.php" class="glyphicon glyphicon-user" style="margin-right:10px"> SIGN UP</a></li>
								
									</ul>
									<?php
		
          						}
                               


                  ?>
					
				</div>
				</nav>
		
</body>
</html>