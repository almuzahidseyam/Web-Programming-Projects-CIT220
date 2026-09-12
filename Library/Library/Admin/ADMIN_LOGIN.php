
<?php
 include"connection.php";
 session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Admin_login</title>
	<link rel="stylesheet" type="text/css"  href="style.css">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		
    body{

    	text-align:center;
    }

	</style>

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

                     <?php

                      if(isset($_SESSION['login_user'])){
                      	?>
                             <ul class="nav navbar-nav">  
 

                                         <li><a style="color:white;float:right;margin-top:13px;margin-right:20px" href="logout.php"> <span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                            

                             </ul>



                        <?php            
                      }

                      else{
                      	?>

                      	<ul class="nav navbar-nav navbar-right">
						
						<li><a style="color:white" href="ADMIN_LOGIN.php"><span class="glyphicon glyphicon-log-in">   LOGIN</span></a></li>

					
						<li><a style="color:white" href="registration.php" class="glyphicon glyphicon-user" style="margin-right:10px"> SIGN UP</a></li>
						</ul>
					
				   </ul>
				   <?php

                      }

                     ?> 


                  
					 
				</div>
				</nav>
		

			


	
		<section>
				<div class="log_img">
					<br><br>

					<div class="box1">
				    <br>
					<h1 style="font-family:Lucida Console;font-size:35px;text-align:center;font-color:white">Library <br>Management System</h1>
					<h1 style="font-family:Lucida Console;font-size:25px;text-align:center">Admin Login Form</h1>
					<form action=""method="post" name="Login">
						
						

						<div class="login">

						<input class="form-control" type="text" name="username" placeholder="Username" required=""/> <br>
                  
						<input class="form-control"
						type="password" name="password" placeholder="Password" required=""/> <br>
                   
                        <input class="btn btn-default" type="submit" name="login" value="Login"
                        style="color:white;height:35px;width:70px;background-color:#367a9e">
  						

						</div>
						</form>
					    <br><br>
					     <p style="color:blue;font-size:20px;
					     margin-left:20px">
					     <a href="update_password.php">Forgot Password?</a>
					     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

					     	<a href="registration.php">Sign Up</a>
					    </p>
                
         
					</div>
				</div>
		</section>
		<?php

       if(isset($_POST['login'])){


  			$count=0;         
            $res = mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
            $row=mysqli_fetch_assoc($res);
            $count=mysqli_num_rows($res);


            if($count==0){

            	?>
            	<script type="text/javascript">
            		
            		alert("the username and password don't match");
            	</script>
            	<?php
            }
            else{

            	$_SESSION['login_user'] = $_POST['username'];
            	$_SESSION['pic']=$row['pic'];
            	
            	?>
                   
                  	<script type="text/javascript">
            		
            	   window.location="index.php";
            	    </script>

            	<?php

                         
            }

        
         
       }




	?>
	</body>

</html>