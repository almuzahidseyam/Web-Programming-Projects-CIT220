<?php
   
     include"navbar.php";
     include"connection.php";



      if(isset($_POST['submit'])){
         $count=0;
         $sql="SELECT student.username,roll,books.name,author,edition,issue,issue_book.return FROM student INNER JOIN issue_book ON issue_book.username=student.username INNER JOIN books ON issue_book.bid=books.bid WHERE issue_book.approve='Yes'&& books.name='$_POST[name]' && books.edition='$_POST[edition]'ORDER BY  issue_book.return ASC";

        $res=mysqli_query($db,$sql);
        $count=mysqli_num_rows($res);
        if($count==0){
          echo "<span style='font-size:25px;font-family:Lucida Console;margin:0px 450px;color:red'>"." No student has taken this book"."</span>";

        }

        else{
          echo "<span style='font-size:25px;font-family:Lucida Console;margin:0px 420px;color:blue'>".$count." students have taken this book"."</span>";
          ?>
          <br><br>
          <?php
        echo "<table class='table table-bordered table-hover'>";


		  echo "<tr style='background-color:#33FF80;'>";
		  echo"<th>";echo"Username";echo"</th>";
		  echo"<th>";echo"ID";echo"</th>";
		  echo"<th>";echo"Book Name";echo"</th>";
		  echo"<th>";echo"Author";echo"</th>";
		  echo"<th>";echo"Edition";echo"</th>";
		  echo"<th>";echo"Issue-date";echo"</th>";
		  echo"<th>";echo"Return-Date";echo"</th>";
		  echo"</tr>";
				  
		  while($row=mysqli_fetch_assoc($res)){

		   echo "<tr style='color:#f5f5f5'>";
		   echo"<td>";echo $row['username'];echo"</td>";
		   echo"<td>";echo $row['roll'];echo"</td>";
		   echo"<td>";echo $row['name'];echo"</td>";
		   echo"<td>";echo $row['author'];echo"</td>";
		   
		   echo"<td>";echo $row['edition'];echo"</td>";
		   echo"<td>";echo $row['issue'];echo"</td>";
		   echo"<td>";echo $row['return'];echo"</td>";
		   echo "</tr>";
  }

      }
}
  

?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Status</title>
  <style type="text/css">
    body{
      background-color:black;
    }
  </style>
</head>
<body>

</body>
</html>
