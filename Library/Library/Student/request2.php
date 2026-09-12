
<?php include "navbar.php";
      include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Requested Books
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
                <a href="#">Issue Information</a>
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





    <!---________________searchbar____________________---->


                    
                      <h2>Requested Books</h2>
                      <?php
                      $sql="SELECT * FROM `issue_book`WHERE username = '$_SESSION[login_user]'";
                      $res = mysqli_query($db,$sql);

                      echo "<table class='table table-bordered table-hover'>";


                      echo "<tr style='background-color:#2bc7b6'>";
                      echo"<th>";echo"Username";echo"</th>";
                      echo"<th>";echo"Book-ID";echo"</th>";
                      echo"<th>";echo"Approve";echo"</th>";
                      echo"<th>";echo"Issue-Date";echo"</th>";
                      echo"<th>";echo"Return-Date";echo"</th>";
                      echo"</tr>";
                      
                      while($row=mysqli_fetch_assoc($res)){

                       echo "<tr>";
                       echo"<td>";echo $row['username'];echo"</td>";
                       echo"<td>";echo $row['bid'];echo"</td>";
                       echo"<td>";echo $row['approve'];echo"</td>";
                       echo"<td>";echo $row['issue'];echo"</td>";
                       echo"<td>";echo $row['return'];echo"</td>";
                       echo "</tr>";



                      }

                      echo "</table>";

                      

                    ?>
                      
                    </div>
                  </div>

</body>
</html>