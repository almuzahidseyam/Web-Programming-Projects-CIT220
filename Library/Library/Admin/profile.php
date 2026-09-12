<?php

 include "connection.php";
 include"navbar.php";
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style>
		
		.wrapper{

			color:white;
			width:300px;
			height:600px;
			margin:0px auto;
		}

	</style>
</head>
<body style="background-color:#004528">
      <div class="wrapper">
	<?php
	 if(!isset($_SESSION['login_user']))
       {

              echo"<span style='color:red;font-size:30px;text-align:center;font-family:arial'>Nobody Logged-in</span>";
       }
       else
       {

     ?>
      <div class="container">
            
            <form action="" method="post">
                  <button class="btn btn-default" style="float:right;width:70px" name="submit1">Edit</button>
            </form>
      </div>


      <h2 style="text-align:center">My Profile</h2>
      <hr>
      <div style="font-color:white;font-weight:bold;font-size:20px;text-align:center">Welcome,</div>

      <?php

      $q = mysqli_query($db,"SELECT * FROM `student` WHERE username ='$_SESSION[login_user]';");

      $row=mysqli_fetch_assoc($q);
      echo "<p style='text-align:center;font-size:20px;'>".$_SESSION['login_user']."</p>";
      echo"<b>";
      echo"<table class='table table-bordered '>";
      echo"<tr>";
      echo"<td>";
      echo"<b>First Name</b>";
      echo"</td>"."<br>";
      

      echo"<td>";
      echo" ".$row['first'];
      echo"</td>";
      echo"</tr>";

      echo"<tr>";
      echo"<td>";
      echo"<b>Last Name</b>";
      echo"</td>";
      echo"<td>";
      echo" ".$row['last'];
      echo"</td>";
      echo"<tr/>"."<br>";

      echo"<tr>";
      echo"<td>";
      echo"<b>ID</b>";
      echo"</td>";
      echo"<td>";
      echo" ".$row['roll'];
      echo"</td>";
      echo"<tr/>"."<br>";

      echo"<tr>";
      echo"<td>";
      echo"<b>Username</b>";
      echo"</td>";
      echo"<td>";
      echo" ".$row['username'];
      echo"</td>";
      echo"<tr/>"."<br>";

      echo"<tr>";
      echo"<td>";
      echo"<b>Email</b>";
      echo"</td>";
      echo"<td>";
      echo" ".$row['email'];
      echo"</td>";
      echo"<tr/>"."<br>";

      echo"</table";
      echo"</b>";


       }
	?>

	</div>

</body>
</html>