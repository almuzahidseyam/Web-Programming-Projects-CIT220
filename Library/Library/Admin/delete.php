<?php include "navbar.php";
      include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Books
	</title>

  <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <

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

     /*------_______Side navbar_______-------*/
     body {
  font-family: "Lato", sans-serif;
  background-image:url("image/library.jpg");

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
.book{

     width:300px;
     margin:0px auto;
}
.form-control{

  background-color:#080707;
  color:white;
}
.container{    
width:450px;
height:250px;
background-color:#b56519;
margin-bottom:50px;



	</style>

</head>
<body>

<!-----------------------Side navabr--------------->
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="add.php">Add Books</a>
                <a href="delete.php">Delete Books</a>
                <a href="request.php">Book Request</a>
                <a href="issue_info.php">Issue Information</a>
              </div>

              <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
              
             

              <div class="container">
                <h2 style="font-family:Lucida console;text-align:center;font-weight:bold">Delete Books</h2><br>
                <form action="" method="post" class="book" >
                  <input type="text" name="bid" placeholder="Book ID" class="form-control" required="" ><br>
                 
                  <button class="btn btn-default" type="submit" name="submit" style="background-color:#286090;color:white;">Submit</button>
                </form>
              </div>
                     <?php

                     if(isset($_POST['submit'])){

                         if(isset($_SESSION['login_user'])){

                      $count= 0;
            $sql= "SELECT bid FROM `books`";
            $res=mysqli_query($db,$sql);

              while($row=mysqli_fetch_assoc($res)){

                if($row['bid']==$_POST['bid']){

                  $count=$count+1;
                }
              }
                
                if($count==0){

             

         ?>

         <script type="text/javascript">
          alert("Book is not found!!");
          
                
            window.location="book.php";
               
            </script>
         <?php

            }

            else{
                 mysqli_query($db,"DELETE FROM `books` WHERE bid='$_POST[bid]';");
                ?>

             
            <script type="text/javascript">
          alert("Book is successfully deleted!!");
           window.location="book.php";
               
            </script>

         <?php   }
                         
                       }

                         else
                         {
                           ?> 
                          <script type="text/javascript">
                             alert("You nedd to login first!!!");
                             window.location="ADMIN_LOGIN.php";

                          </script>
                          <?php

                         }
                       }

                     


            ?>

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

</div>



</body>
</html>