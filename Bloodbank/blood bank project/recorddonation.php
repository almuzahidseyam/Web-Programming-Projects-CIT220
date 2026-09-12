<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$u_id = $_SESSION["id"];
$u_name = $u_group =  $donation_date = $place = "";
$donation_date_err = $place_err = "";

require_once "config.php";

$sql = "SELECT `name`,`blood_group` FROM `users` WHERE `id` = ".$u_id;
$result = $mysqli->query($sql);
if($row = $result->fetch_assoc()) {
  $u_name = $row["name"];
  $u_group = $row["blood_group"];
}

else {
    header("location: ./login.php");
}


if($_SERVER["REQUEST_METHOD"] == "POST"){

 

	

	if (empty(trim($_POST["donation_date"]))) {

		$donation_date_err = "Date is required.";
    }
    else{
        $donation_date = $_POST["donation_date"];
    }
    if (empty(trim($_POST["place"]))) {

		$place_err = "Date is required.";
    } 
    else {
        $place = trim($_POST["place"]);
    }

    
    if(empty($email_err) && empty($name_err) ){
        $sql = "INSERT INTO `donation_history` (`donor_id`, `donation_date`, `donation_place`) VALUES (?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){

            

            $stmt->bind_param("sss", $param_donor_id, $param_donation_date, $param_donation_place);

            

        

			$param_donor_id = $u_id;

            $param_donation_date = $donation_date;

            $param_donation_place = $place;

            if($stmt->execute()){

				
				

               

                header("location: ./donation.php");

            } else{

                echo "Something went wrong. Please try again later.";

            }         

			
			$stmt->close();
        }
    }

}

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation Record</title>
    <style>
        .wrapper {
            text-align: center;
            background: linear-gradient(to left, rgba(0,255,0,.5), rgba(0,0,255,.5));
            width: 400px;
            height:350px;
            font-size: 15px;
        }
        .form-group{
            text-align: left;
            padding: 5px;
        }
        .form-group input, .form-group select{
            float:  right;
        }
    </style>
</head>

<body>
<div class="wrapper">

<div class="wrapper-title"><h2>Record Donation</h2>

<h2>Record for <b><span><?php echo($u_name); ?></span></b> with Blood Group <b><span><?php echo($u_group); ?></span></b></h2>
</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <div class="form-group <?php echo (!empty($donation_date_err)) ? 'has-error' : ''; ?>">

        <label>Donation Date:</label>

        <input type="date" name="donation_date" class="form-control" value="<?php echo $donation_date; ?>">

        <span class="help-block"><?php echo $donation_date_err; ?></span>

    </div> 

    <div class="form-group <?php echo (!empty($place_err)) ? 'has-error' : ''; ?>">

        <label>Donation Place:</label>

        <input type="text" name="place" class="form-control" value="<?php echo $place; ?>">

        <span class="help-block"><?php echo $place_err; ?></span>

    </div>    

   
    <div class="form-group">

        <input type="submit" class="btn btn-primary" value="Submit">

        <input type="reset" class="btn btn-default" value="Reset">

    </div>


</form>
<div style="float:right; background: teal;">
            <a href="login.php">← Back</a>
        </div>
</div>    


</body>


</html>