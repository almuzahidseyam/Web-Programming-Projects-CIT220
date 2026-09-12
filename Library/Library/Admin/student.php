
<?php include "navbar.php";
include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information
	</title>

    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		
     .wrapper{

     	margin:0px;
     	padding:0px 10px;
     }

     .srch{
     	margin:0px;
     	padding-left:1000px;
     }

	</style>

</head>
<body>
    <!---________________searchbar____________________---->

<div class="srch">
<form method="post"action="" name="form1" class="navbar-form">
<input type="text" name="search" placeholder="Search Students..." class="form-control" required=""/>	
<button type="submit"name="submit" class="btn btn-default" style="background-color:#2bc7b6"><span class="glyphicon glyphicon-search"></span></button>

</form>
</div>
  <div class="wrapper">
  <h2 style="font-family:Lucida Console">List of Students</h2>
  <?php
if(isset($_POST['submit'])){


  $q = mysqli_query($db,"SELECT first,last,roll,username,email FROM `student` WHERE username like '%$_POST[search]%'");
 

  if( mysqli_num_rows($q)==0){

  	  echo "<span style='color:red;font-size:20px;font-wight:bold'>Sorry !!!! Student is not found</span>";
  }
  else
  {
  echo "<table class='table table-bordered table-hover'>";
  echo "<tr style='background-color:#2bc7b6'>";
  echo"<th>";echo"ID";echo"</th>";
  echo"<th>";echo"First Name";echo"</th>";
  echo"<th>";echo"Last Name";echo"</th>";
  echo"<th>";echo"Username";echo"</th>";
  echo"<th>";echo"Email";echo"</th>";
  echo"</tr>";
  
  while($row=mysqli_fetch_assoc($q)){

   echo "<tr>";
   echo"<td>";echo $row['roll'];echo"</td>";
   echo"<td>";echo $row['first'];echo"</td>";
   echo"<td>";echo $row['last'];echo"</td>";
   echo"<td>";echo $row['username'];echo"</td>";
   echo"<td>";echo $row['email'];echo"</td>";
   echo "</tr>";



  }

  echo "</table>";

  }
}

  else
  {


  $res=mysqli_query($db,"SELECT  first,last,roll,username,email FROM `student` ORDER BY `student`.`first` ASC;");

  echo "<table class='table table-bordered table-hover'>";


  echo "<tr style='background-color:#2bc7b6'>";
  echo"<th>";echo"ID";echo"</th>";
  echo"<th>";echo"First Name";echo"</th>";
  echo"<th>";echo"Last Name";echo"</th>";
  echo"<th>";echo"Username";echo"</th>";
  echo"<th>";echo"Email";echo"</th>";
  echo"</tr>";
  
  while($row=mysqli_fetch_assoc($res)){

   echo "<tr>";
   echo"<td>";echo $row['roll'];echo"</td>";
   echo"<td>";echo $row['first'];echo"</td>";
   echo"<td>";echo $row['last'];echo"</td>";
   echo"<td>";echo $row['username'];echo"</td>";
   echo"<td>";echo $row['email'];echo"</td>";

   echo "</tr>";



  }

  echo "</table>";

  }

?>
  
</div>

</body>
</html>