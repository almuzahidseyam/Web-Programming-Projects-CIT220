<?php
include"connection.php";
include"navbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
		body{
            
             height:650px;
             background-color:#004528;

		}
		.wrapper{

                  width:400px;
                  height:400px;
                  background-color:black;
                  margin:100px auto;
                  opacity:.8;
                  color:white;
                  padding:5px 15px;
		}
		.form-control{

			width:225px;

		}
		.pass{

			padding-left:73px;
		}
	</style>
</head>
<body>

	<div class="wrapper">
		<div style="text-align:center; padding:5px 0px">
		<h1 style="font-family:Lucida Console;font-size:20px;text-align:center">Change Your Password</h1>
	</div>
	<br>
<div class="pass">
 <form action="" method="post">
<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
<button class="btn btn-default" style="background-color:#004528;color:white" name="submit" type="submit">Update</button>
</div>
  </form>
	</div>

	<?php

     if(isset($_POST['submit']))
     {

     	  $sql="UPDATE `admin` SET password = '$_POST[password]' WHERE username = '$_POST[username]' AND email='$_POST[email]'";
     	  mysqli_query($db,$sql);

     	  ?>

     	   <script type="text/javascript">
         	alert("Update Successful!!");
     	   </script>
     	  <?php
     	 
     	}

	?> 

</body>
</html>