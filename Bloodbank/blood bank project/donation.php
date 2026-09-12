<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$u_id = $_SESSION["id"];


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
  width: 100%-300px;
}

    </style>
</head>
<body>
    <div class="container">
    <div class="rowtable-row" style="font-weight: bold;" >
                    <div class="col_sl" >Sl No.</div>
                    <div class="col_date" >Date</div>
                    <div class="col_place" >Place</div>
            </div>
            <hr>
<?php

require_once "config.php";

$sql = "SELECT * FROM `donation_history` WHERE `donor_id` = ".$u_id;
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
   
	$ph = 1;
   
    while($row = $result->fetch_assoc()) {
        
        echo('

            <div class="rowtable-row">
                    <div class="col_sl" >'.$ph.'</div>
                    <div class="col_date" >'.$row["donation_date"].'</div>
                    <div class="col_place" >'.$row["donation_place"].'</div>
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

</body>
</html>

