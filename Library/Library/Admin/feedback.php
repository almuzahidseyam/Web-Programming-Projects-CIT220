<?php  include"navbar.php";

include"connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initital-scale= 1"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		
            body{

               background-image:url("");

            }
            .wrapper{
                      
                      padding:10px;
                      margin:20px auto;
                      height:600px;
                      width:900px;
                      background-color:black;
                      opacity:0.8;
                      color:white;

            }
          .form-control{

          	height:70px;
          	width:60%;
          }
          .scroll{

             width:100%;
             height:400px;
             overflow:auto;
          }


		
	</style>

</head>
<body>

	<div class="wrapper">
		<h4>if you have any suggessions or questions please commment below</h4>
	
	  <form style="" action="" method="post">
      <input class="form-control" type="text" name="comment" placeholder="Write Something......"/><br>
      <input class="btn btn-default" type="submit" name="submit" value ="Comment" style="width:85px;height:30px;background-color:#31ca9c;color:white;"/>


	  </form><br> 
	  <div class="scroll">
	
	<?php 

  if(isset($_POST['submit'])){

     $sql="INSERT INTO `comment` VALUES('','$_POST[comment]');";
     if(mysqli_query($db,$sql)){

        $q="SELECT * FROM `comment`";
        $res=mysqli_query($db,$q);
        echo"<table class='table table-bordered'>";
        while($row=mysqli_fetch_assoc($res)){

        	echo"<tr>";
                 
                 echo"<td>";echo$row['comment'];echo"</td>";

        	echo"</tr>";
        }

     }
     
 }
 else{


        $q="SELECT * FROM `comment`";
        $res=mysqli_query($db,$q);
        echo"<table class='table table-bordered'>";
        while($row=mysqli_fetch_assoc($res)){

        	echo"<tr>";
                 
                 echo"<td>";echo$row['comment'];echo"</td>";

        	echo"</tr>";
        }



 }
?>
</div>

</div>

</body>
</html>