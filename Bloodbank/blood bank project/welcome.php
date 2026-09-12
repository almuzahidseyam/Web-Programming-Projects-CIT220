<?php session_start(); 
require_once "config.php";

                                // $_SESSION["id"] = $id;
                                $username= $_SESSION["username"] ;
                            
                                $blood_groups=$_SESSION["blood_groups"] ;
                                

?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
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
    .button{
      
    }

    </style>
</head>
<body>
  <p> Login Success!</p> <br>
  <button type="submit"><a href= logout.php> logout</a></button>
      <!-- <p> <a href= logout.php> logout</a></p> -->
      <h>My Profile</h>
      <p>Blood Donar: <?php echo $username ?> </p>
      <P>Blood Group: <?php echo $blood_groups?> </P>
      <?php

$sql = "SELECT * FROM requests WHERE request_for = '$blood_groups' ";
$result = $mysqli->query($sql);
/*
if ($result->num_rows > 0) {
   
	*/
    
    while($row = $result->fetch_assoc()) {
        
        echo(
        '

            <div class="card">
            <div class="card-title">
            <h3>Request For You: <span style="color: rgba(192, 0, 0, 0.8);">'.$row["request_for"].' </span>
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

       
        if(isset($_POST['confirm'])){
        $sql = "INSERT INTO receiver_history (blood_group,contact_no) VALUES (?, ?)";

        if($stmt = $mysqli->prepare($sql)){
        
            $stmt->bind_param("ss",$param_blood_group,$param_contact_no);
        
            $param_blood_group = $blood_groups;
            $param_contact_no = $row["contact_no"];

            if($stmt->execute()){
                                    echo"<h3>Donation Confirmed!!!</h3>";
            }
    }
  }

    }
    
    
/*}
else {
        echo "No request Found!";
    }
    $mysqli->close();
*/
?>
 <form action="" method="post">
<button type="submit" name="confirm"><a href= receiver_history.php> confirm</a></button>
</body>
</html>


