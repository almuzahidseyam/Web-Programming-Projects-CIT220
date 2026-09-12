<?php



require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .container{
    width: 960px;
    padding-left:100px;
    padding-right: 100px;
    
    }
    .card{
    text-align: center;
    background: lightblue;;
    float: left;
    width: 300px;
    line-height: 1.5;
    padding-bottom: 5px;
    margin: 5px;
    border-radius: 10px;
    }
   
   
    .card-body-row{
    width: 100%;
    text-align: left;
    }
    .card-attrib{
    float: left;
    padding-left: 5px;
    width:  36%;
    }
    .card-value{
    float: right;
    width: 56%;
    padding-right: 5px;
    font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="container">

<?php

$sql = "SELECT * FROM `requests` WHERE `requried_date` >= CURRENT_DATE";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
   
	
    
    while($row = $result->fetch_assoc()) {
        
        echo(
        '

            <div class="card">
            <div class="card-title">
            <h3>Request For: <span style="color: rgba(192, 0, 0, 0.8);">'.$row["request_for"].' </span>
            </div></h3>
            <div class="card-body">
                <div class="card-body-row">
                    <div class="card-attrib">Name:</div>
                    <div class="card-value" >'.$row["request_by"].'</div>
                </div>
                <div class="card-body-row">
                    <div class="card-attrib">Email:</div>
                    <div class="card-value" >'.$row["email"].'</div>
                </div>
                <div class="card-body-row">
                    <div class="card-attrib">Gender:</div>
                    <div class="card-value" >'.$row["gender"].'</div>
                </div>
                <div class="card-body-row">
                    <div class="card-attrib">Contact No.:</div>
                    <div class="card-value" >'.$row["contact_no"].'</div>
                </div>
                <div class="card-body-row">
                    <div class="card-attrib">Required Date:</div>
                    <div class="card-value" >'.$row["requried_date"].'</div>
                </div>
            </div>
        </div>
        '
        );

   

    }
    
}
else {
        echo "No request Found!";
    }
    $mysqli->close();

?> <?php


        ?>
        

    </div>

    <div style="float:right; background: teal;">
            <a href="index.php">← Back</a>
        </div>
</body>
</html>