<?php

$db=mysqli_connect("localhost","root","","generation");

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> View form</title> 
	<link rel="stylesheet" type="text/css" href="css/style.css">    
	<style type="text/css">
	
	
			
		div#input2 {
						padding-top:200px;
						padding-bottom:8px;
						margin-bottom:10px;
						width:99%;
						}	
		td, th{padding:5px;}
		
		
	</style>
	
	
</head>

<body style="color:black;background-color:skyblue">
	<div>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="input.php">Input</a></li>
		<li class="active"><a href="#">View</a></li>
		

	</ul>
	</div>
	<center>
	<div id="input2">

		
		<form action="" method="post">
		<input type="text" placeholder="Search..." name ="name" required="" />
		<button style="display:inline-block;" name="submit">Search</button>
		</form>
       <br><br>

    <?php
         if(isset($_POST['submit'])){

        $sql="select * from generation where ChildName='$_POST[name]' || fatherName = '$_POST[name]' || MotherName='$_POST[name]' || GrandFatherName = '$_POST[name]'  || GrandMotherName ='$_POST[name]'" ;

         $res=mysqli_query($db,$sql);
           echo"<table width='1000px'border='5' cellpadding='3'>";
           echo"<tr>";
           echo"<th>";echo"Child Name";echo"</th>";
           echo"<th>";echo"Father's Name";echo"</th>";
           echo"<th>";echo"Mother's Name";echo"</th>";
           echo"<th>";echo"GrandFather Name";echo"</th>";
           echo"<th>";echo"Grandmother Name";echo"</th>";
           echo"</tr>";


         while($row=mysqli_fetch_assoc($res)){
            
           echo"<tr>";
           echo"<td>";echo"$row[ChildName]";echo"</td>";
           echo"<td>";echo"$row[fatherName]";echo"</td>";
           echo"<td>";echo"$row[MotherName]";echo"</td>";
           echo"<td>";echo"$row[GrandFatherName]";echo"</td>";
           echo"<td>";echo"$row[GrandMotherName]";echo"</td>";
           echo"</tr>";

         }
         echo"</table>";
     }

    ?>

		
		
		
	</div>
	
	</center>
</body>
</html>