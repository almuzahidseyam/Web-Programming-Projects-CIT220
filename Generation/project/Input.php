<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> insert form</title> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		
		div#lock{  
						width:350px;
						
						padding:10px; 
					 }
		div#input1 input{
						padding-up:8px;
						padding-bottom:8px;
						margin-bottom:10px;
						width:99%;
						}
		.signuptitle{ 
						background:#03A9F4;
						margin-bottom:10px;
						
						}
						
						
		.signuptitle h2{
						text-align:center; 
						padding:10px;
						margin:0px;
						color:white;
						font-family:arial black;
					    }
						
		.submitbutton input{
								
							background:#03A9F4;
							padding:8px;
							width:100%;
							color:white;
							font-family:arial black;
							display:block;
							text-align:center;
							border : 1px solid #0a8eca;
							border-radius:5px;
							
							
							}
		
		
	</style>
	
	
</head>

<body style="color:black;background-color:green">
	<ul>
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="input.php">Input</a></li>
				<li><a href="view.php">View</a></li>
				
			</ul>
	<center>
	<div id="lock">
		
		<div class="signuptitle"><h2>Insert Data</h2></div>
		
		
		<form action="insert.php" method="post">
		
		<b> Child Name</b>
		<div id="input1" ><input type="text" placeholder="Enter Child name" name="ChildName" /> </div>
		
		<b> Father name</b>
		<div id="input1"><input type="text" placeholder="Enter Father Name" name="fatherName"/> </div>
		
		<b> Mother name</b>
		<div id="input1"><input type="text" placeholder="Enter Mother Name" name="MotherName"/> </div>
		
		<b> Grandfather name</b>
		<div id="input1"><input type="text" placeholder="Enter Grandfather Name" name="GrandFatherName"/> </div>
		
		<b> Grandmother name</b>
		<div id="input1"><input type="text" placeholder="Enter Grandmother Name" name="GrandMotherName"/> </div>
		
	

	<div class="submitbutton"> <input type="submit" value="Submit"/> </div>
		
		</form>
		
		
	</div>
	
	</center>
</body>
</html>