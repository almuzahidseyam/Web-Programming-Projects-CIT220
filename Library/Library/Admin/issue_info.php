
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
 <?php

 if(isset($_SESSION['login_user'])){

$sql="SELECT student.username,roll,books.name,author,edition,issue,issue_book.return FROM student INNER JOIN issue_book ON issue_book.username=student.username INNER JOIN books ON issue_book.bid=books.bid WHERE issue_book.approve='Yes' ORDER BY  issue_book.return ASC";
  $res=mysqli_query($db,$sql);


  echo "<table class='table table-bordered table-hover'>";


  echo "<tr style='background-color:#2bc7b6'>";
  echo"<th>";echo"Username";echo"</th>";
  echo"<th>";echo"ID";echo"</th>";
  echo"<th>";echo"Book Name";echo"</th>";
  echo"<th>";echo"Author";echo"</th>";
  echo"<th>";echo"Edition";echo"</th>";
  echo"<th>";echo"Issue-date";echo"</th>";
  echo"<th>";echo"Return-Date";echo"</th>";
  echo"</tr>";
  
  while($row=mysqli_fetch_assoc($res)){

   echo "<tr>";
   echo"<td>";echo $row['username'];echo"</td>";
   echo"<td>";echo $row['roll'];echo"</td>";
   echo"<td>";echo $row['name'];echo"</td>";
   echo"<td>";echo $row['author'];echo"</td>";
   
   echo"<td>";echo $row['edition'];echo"</td>";
   echo"<td>";echo $row['issue'];echo"</td>";
   echo"<td>";echo $row['return'];echo"</td>";

   echo "</tr>";



  }

  echo "</table>";

  

 }
 else
 {
  ?>
  <script type="text/javascript">
    alert("You need to login first");
    window.location="ADMIN_LOGIN.php";
  </script>
  <?php
 }

?>
  
</div>

</body>
</html>