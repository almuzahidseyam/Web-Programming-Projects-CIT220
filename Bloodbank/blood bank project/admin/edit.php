<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ||  $_SESSION["role"] !== "admin"){
    header("location: login.php");
    exit;
}
?>

<?php



require_once "./../config.php";

 



$u_id = $email = $name = $password = $confirm_password = $blood_groups  = "";

$email_err = $name_err = $password_err = $confirm_password_err = $blood_groups_err = "";



function test_input($data) {

  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;
  

}


if($_SERVER["REQUEST_METHOD"]  == "GET"){
    if(isset($_GET["id"])){

        $u_id =trim($_GET["id"]);

        $sql = "SELECT * FROM `users` WHERE `id` = ".$u_id;
        $result = $mysqli->query($sql);

        if($row = $result->fetch_assoc()) {
            $email = $row["email"];
            $name = $row["name"];
            $blood_groups = $row["blood_group"];
        }
          
    }
}



if($_SERVER["REQUEST_METHOD"] == "POST"){

 
    $u_id = trim($_POST["u_id"]);
	

	if (empty(trim($_POST["email"]))) {

		$email_err = "Email is required.";

	} else {

		$email = test_input($_POST["email"]);
    }

   

    if(empty(trim($_POST["name"]))){

        $name_err = "Please enter a name.";

    } else{

        $name = $_POST["name"];
    
    }

    

    

    if(empty(trim($_POST["password"]))){

        $password_err = "Please enter a password.";     

    } elseif(strlen(trim($_POST["password"])) < 6){

        $password_err = "Password must have atleast 6 characters.";

    } else{

        $password = trim($_POST["password"]);

    }

    

    

    if(empty(trim($_POST["confirm_password"]))){

        $confirm_password_err = "Please confirm password.";     

    } else{

        $confirm_password = trim($_POST["confirm_password"]);

        if(empty($password_err) && ($password != $confirm_password)){

            $confirm_password_err = "Password did not match.";

        }

    }

     
     if(empty(trim($_POST["blood_groups"]))){

        $blood_groups_err = "Please select a blood group.";     

    }  else{

        $blood_groups  = trim($_POST["blood_groups"]);

    }

    

    if(empty($email_err) && empty($name_err) && empty($password_err) && empty($confirm_password_err) && empty($blood_groups_err)){

        

       

        $sql = "UPDATE `users` SET `email`= ?,`name`= ?,`password`= ?,`blood_group`= ? WHERE `id`= ?";

         

        if($stmt = $mysqli->prepare($sql)){

            

            $stmt->bind_param("sssss", $param_email, $param_name, $param_password, $param_blood_group,$param_id);

            

            

			$param_email = $email;

            $param_name = $name;

            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_blood_group = $blood_groups;
            $param_id = $u_id;
            

            

            if($stmt->execute()){

				

				

                

                header("location: ./index.php");

            } else{

                echo "Something went wrong. Please try again later.";

            }         

			

			$stmt->close();

        }



    }

    

  

    $mysqli->close();

}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <style>
        .wrapper {
            text-align: center;
            background: linear-gradient(to left, rgba(0,255,0,.5), rgba(0,0,255,.5));
            width: 400px;
            font-size: 20px;
        }
        .form-group{
            text-align: left;
            padding: 5px;
        }
        .form-group input, .form-group select{
            float: right;
        }
    </style>
</head>
<body>
    

    <div class="wrapper">

        <div class="wrapper-title"><h2>Update User</h2>

        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <input name="u_id" value="<?php echo $u_id; ?>" hidden>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">

                <label>Email</label>

                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">

                <span class="help-block"><?php echo $email_err; ?></span>

            </div> 

			<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">

                <label>Name</label>

                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">

                <span class="help-block"><?php echo $name_err; ?></span>

            </div>    

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                <label>Password</label>

                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">

                <span class="help-block"><?php echo $password_err; ?></span>

            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                <label>Confirm Password</label>

                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">

                <span class="help-block"><?php echo $confirm_password_err; ?></span>

            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                <label>Confirm Password</label>

                <select name="blood_groups" class="form-control">

					<option value="A+">A(+ve)</option>

                    <option value="A-">A(-ve)</option>
                    <option value="B+">B(+ve)</option>
                    <option value="B-">B(-ve)</option>
                    <option value="O+">O(+ve)</option>
                    <option value="O-">O(-ve)</option>
                    <option value="AB+">AB(+ve)</option>
                    <option value="AB-">AB(-ve)</option>

				</select>

                <span class="help-block"><?php echo $confirm_password_err; ?></span>

            </div>

            <div class="form-group">

                <input type="submit" class="btn btn-primary" value="Submit">

                <input type="reset" class="btn btn-default" value="Reset">

            </div>

        </form>
        <div style="float:right; background: teal;">
            <a href="index.php">← Back</a>
        </div>

    </div>    

    </body>
</html>