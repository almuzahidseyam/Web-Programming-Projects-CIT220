<?php include "navbar.php";
      include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rquest Approve
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

     body {
  font-family: "Lato", sans-serif;
  background-color:#1BA445;
  
}

.sidenav {
  height: 100%;
  width: 0;
  margin-top:61px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.container{
   
   width:500px;
   height:500px;
   background-color:#E15E30;
   margin:0px 500px; 
   

}
.approve{
margin-left:118px;
}


	</style>

</head>
<body>                  
<!-----------------------Side navabr--------------->
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="profile.php">Profile</a>
                <a href="book.php">Books</a>
                <a href="request.php">Book Request</a>
                <a href="issue_info.php">Issue Information</a>
              </div>

              <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
              

              <script>
              function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
                document.getElementById("main").style.marginLeft = "300px";
              }

              function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
              }
              </script>
              <div class="container">
               <br><br><h2 style="text-align:center">Approve Request</h2><br><br>
                <form action="" method="post" class="approve" >
                  
                 <input class="form-control" type="text" name="approve" placeholder="Yes or Not" required="" style="width:250px"><br>

                 <input class="form-control" type="text" name="issue" placeholder="Issue date yy-mm-dd" required="" style="width:250px"><br>

                 <input class="form-control" type="text" name="return" placeholder="Return date yy-mm-dd" required="" style="width:250px"><br>
                 <button class="btn btn-default" type="submit" name="submit">Approve</button>

                </form>
              </div>
            </div>
            <?php
            if(isset($_POST['submit']))
            {

               $sql="UPDATE `issue_book` SET `approve`='$_POST[approve]',`issue`='$_POST[issue]',`return`='$_POST[return]' WHERE `username`='$_SESSION[name]' AND `bid`='$_SESSION[bid]'";
               mysqli_query($db,$sql);
               mysqli_query($db,"UPDATE books SET quantity=quantity-1 WHERE bid='$_SESSION[bid]';");
               $res=mysqli_query($db,"SELECT quantity FROM books WHERE bid='$_SESSION[bid]';");
               while($row=mysqli_fetch_assoc($res)){
                  
                  if($row['quantity']==0){
                     
                     mysqli_query($db,"UPDATE books SET status='Not-Available' WHERE bid='$_SESSION[bid]';");

                  }

               }
               ?>
                   <script type="text/javascript">
                     
                alert("Approved Successfully.");
                window.location="request.php";

                   </script>

               <?php

            }


            ?>
          </body>
          </html>
 