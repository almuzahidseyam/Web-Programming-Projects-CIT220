<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ||  $_SESSION["role"] !== "admin"){
    header("location: login.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    
    .rowtable-row {
  
}
.container{
  width: 80%;
  text-align: center;
  margin-left: 10%;
  background:lightpink;
}
.rowtable-row{
  
}
.col_sl{
  width: 100px;
  float: left;
  
}
.col_date {
  width: 200px;
  float: left;
}
.col_place{
  width: 100%-800px;
}

    </style>
</head>
<body>
    <div class="container">
    <div class="rowtable-row" style="font-weight: bold;" >
                    <div class="col_sl" >User ID.</div>
                    <div class="col_date" >User Name</div>
                    <div class="col_date" >Email</div>
                    <div class="col_sl" >B. G.</div>
                    <div class="col_date" >Created at</div>
                    <div class="col_place" >Actions</div>
                    
            </div>
            <hr>
<?php

require_once "./../config.php";

$sql = "SELECT * FROM `users` WHERE 1";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
   
	$ph = 1;
    
    while($row = $result->fetch_assoc()) {
        
        echo('

            <div class="rowtable-row">
                    <div class="col_sl" >'.$row["id"].'</div>
                    <div class="col_date" >'.$row["name"].'</div>
                    <div class="col_date" >'.$row["email"].'</div>
                    <div class="col_sl" >'.$row["blood_group"].'</div>
                    <div class="col_date" >'.$row["created_at"].'</div>
                    <div class="col_place" ><a style="margin-right: 5px;" href="edit.php?id='.$row["id"].'">Edit</a>   <a href="#" onclick="confirmation('.$row["id"].')">Delete</a></div>
            </div>
       


        ');
        $ph++;
    }
}

else {
    echo("No Donation found!");
}
$mysqli->close();

?>

<script>
  function confirmation(id){
    var uri = "delete.php?id=";
    uri = uri.concat(id);
    var cfm = confirm("Are you Sure?");
    if (cfm == true)  {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          window.location.reload();
        }
      };
      xhttp.open("GET", uri , true);
      xhttp.send();
    }

  }
</script>
 <div style="float:right; background: teal;">
            <a href="./../index.php">← Back</a>
        </div>
</body>
</html>

