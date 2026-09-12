
<?php include "navbar.php";
      include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rquest of Books
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
 


                      <?php
                    
                        
                        if(!isset($_SESSION['login_user']))
                        {
                             
                          echo"<h2 style='color:red;margin-left:450px'>You Need to Login First</h2>";
                         
                         ?>
                           <script type="text/javascript">
                             
                                  window.location:"ADMIN_LOGIN.";
                           </script>

                         <?php

                        }
                        else
                        {
                         ?>
                        <!--Search Bar-->
                      <div class="srch">
                      <form method="post"action="" name="form1" class="navbar-form">
                      <input type="text" name="username" placeholder="Username" class="form-control"style="width:300px;background-color:black;opacity:0.9;color:white" required=""/> 
                      <input type="text" name="bid" placeholder="Book-ID" class="form-control"style="width:300px;margin-top:8px;background-color:black;opacity:0.9;color:white" required=""/> 
                      <button type="submit"name="submit" class="btn btn-default" style="background-color:#331212;margin-top:8px;color:white">Submit</button>
                      </form>
                      </div>

                      <?php
                     
                       
                       if(isset($_POST['submit'])){

                         $_SESSION['name']=$_POST['username'];
                         $_SESSION['bid']=$_POST['bid'];
                         ?>
                         <script type="text/javascript">
                           
                    window.location="approve.php";


                         </script>

                         <?php

                       }
                     


                      ?>
                      <div class="wrapper">

                       <h2>Book Request List</h2>
                      <?php
                        
                              

                            $sql="SELECT student.username,roll,books.bid,name,author,edition,status FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve=''";
                            $res=mysqli_query($db,$sql);


                    
                      echo "<table class='table table-bordered table-hover'>";


                      echo "<tr style='background-color:#2bc7b6'>";
                      echo"<th>";echo"Student-Username";echo"</th>";
                      echo"<th>";echo"Student-ID";echo"</th>";
                      echo"<th>";echo"Book-ID";echo"</th>";
                      echo"<th>";echo"Book-Name";echo"</th>";
                      echo"<th>";echo"Author-Name";echo"</th>";
                      echo"<th>";echo"Edition";echo"</th>";
                      echo"<th>";echo"Status";echo"</th>";
                      echo"</tr>";
                      
                      while($row=mysqli_fetch_assoc($res)){

                       echo "<tr>";
                       echo"<td>";echo $row['username'];echo"</td>";
                       echo"<td>";echo $row['roll'];echo"</td>";
                       echo"<td>";echo $row['bid'];echo"</td>";
                       echo"<td>";echo $row['name'];echo"</td>";
                       echo"<td>";echo $row['author'];echo"</td>";
                       echo"<td>";echo $row['edition'];echo"</td>";
                       echo"<td>";echo $row['status'];echo"</td>";
                       echo "</tr>";



                      }

                        echo "</table>";
                   
                      }


                    ?>
                      
                    </div>
                  </div>

</body>
</html>