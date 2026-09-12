<?php

function getgroup($gr){
    switch($gr){
        case "AP": return "A+";
        case "AN": return "A-";
        case "ABP": return "AB+";
        case "ABN": return "AB-";
        case "BP": return "B+";
        case "BN": return "B-";
        case "OP": return "O+";
        case "ON": return "O-";
    }
}


$group = "A+";

if($_SERVER["REQUEST_METHOD"]  == "GET"){
    if(isset($_GET["group"])){

        $group = getgroup(trim($_GET["group"]));
        
    }
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
    background-color:lightblue;;
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
        <h2>Donor List for Blood Group: <?php echo($group); ?></h2>
    <div class="rowtable-row" style="font-weight: bold;" >
                    <div class="col_sl" >Sl No.</div>
                    <div class="col_date" >Name</div>
                    <div class="col_place" >Email</div>
            </div>
            <hr>
<?php



require_once "config.php";



        $sql = "SELECT `name`,`email` FROM `users` WHERE `blood_group` = '".$group."'";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
   
            $ph = 1;
            
            while($row = $result->fetch_assoc()) {
                
                echo('
        
                    <div class="rowtable-row">
                            <div class="col_sl" >'.$ph.'</div>
                            <div class="col_date" >'.$row["name"].'</div>
                            <div class="col_place" >'.$row["email"].'</div>
                    </div>
               
        
        
                ');
                $ph++;
            }
        }
        
        else {
            echo("No Donor found!");
        }
        $mysqli->close();


 
?>
 <div style="float:right; background: teal;">
            <a href="index.php">← Back</a>
        </div>