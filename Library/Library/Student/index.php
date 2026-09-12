<?php

session_start();

?>



<! DOCTYPE html>
<html>
	<head>
		<title>Online Library Management System
		</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="utf-8"/>
	    <meta name="viewport" content="width=device-width, initital-scale= 1"/>

        <style>
        	
        	li a {

	color:white;
	text-orientation:inline;
	font-size:20px;
    text-decoration:none;

}
nav{

	float:right;
    word-spacing:30px;
    padding:30px;
}

nav li{

	display:inline-block;
	line-height:50px;
    
}
nav li:hover{

	  background-color:green;
	  padding:5px 5px;
	  border-radius: 3px;

}
        </style>

	</head>
		<body>
			<div class="wrapper">

			<header>
				<div class="logo">
				<img src="image/final.png"/>
				<h1 style="color:white">ONLINE LIBRARY MANAGEMENT SYSTEM
                   </div>

                     <?php

                     if(isset($_SESSION['login_user'])){

                       ?>
                     	<nav>
                 <ul>
                        <li><a href="index.php">HOME</a></li>
						<li><a href="book.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
   		                <li><a href="feedback.php">FEEDBACK</a></li>
				 </ul>
				 </nav>
				 <?php

                     }
                     else{
                    ?>
                    <nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
				
						<li><a href="book.php">BOOKS</a></li>
						
						<li><a href="STUDENT_LOGIN.php">STUDENT_LOGIN</a></li>

						<li><a href="feedback.php">FEEDBACK</a></li>
						

				   </ul>
				</nav>
				<?php

                     }
                     
                     ?>

				
			</header>

			<section>
				<div class="sec_img">
				<br><br><br>
				<div class="box">
					<br><br><br><br>
					<h1 style="text-align:center;font-size:34px;">Welcome to Library</h1><br>
					<h1 style="text-align:center;font-size:25px;">Open at: 9 am </h1><br>
					<h1 style="text-align:center;font-size:25px;">Close at:8 pm</h1><br>
				</div>
			</div>
			</section>

			<footer> 
				<br>
				<p style="color:white;text-align:center;font-size:25px">
					Email:&nbsp online.library@gmail.com<br>
					Phone:&nbsp+088017********
				</p>
			</footer>
		</div>

		</body>

</html>