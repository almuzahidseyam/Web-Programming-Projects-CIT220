<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    

<?php

session_start();
    
   
    
   
    require_once "config.php";
    
   
    $username = $password = "";
    $username_err = $password_err = "";
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username/email.";
        } else{
            $username = trim($_POST["username"]);
        }
        
       
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }

        if(empty(trim($_POST["blood_groups"]))){

            $blood_groups_err = "Please select a blood group.";     
    
        }  else{
    
            $blood_groups  = trim($_POST["blood_groups"]);
    
        }

    
        if(empty($username_err) && empty($password_err) && empty($blood_groups_err)){
           
            $sql = "SELECT id, email, password FROM users WHERE email = ?";
            
            if($stmt = $mysqli->prepare($sql)){
                
                $stmt->bind_param("s", $param_username);
                
                
                $param_username = $username;
                
                
                if($stmt->execute()){
                    
                    $stmt->store_result();
                    
                    
                    if($stmt->num_rows == 1){                    
                       
                        $stmt->bind_result($id,  $email, $hashed_password);
                        if($stmt->fetch()){
                            if(password_verify($password, $hashed_password)){
                               
                                session_start();
                                
                               
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $email;
                                $_SESSION["role"] = "user";
                                $_SESSION["blood_groups"] = $blood_groups;

                            
                                
                                header("location: welcome.php");
                            
                            } else{
                               
                                $password_err = "The password you entered was not valid.";
                            }
                        
                        }
                        
                    }
                    else{
                       
                        $username_err = "No account found with that username.";
                    }

                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
          
            $stmt->close();
            }
            
          
        $mysqli->close();
        }
    }
        
        
    
?>

    <div class="wrapper">
        <div class="wrapper-title"><h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email Address</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <!-- $_POST["blood_groups"] -->

            <div class="form-group">
                <label for="bg">Blood Group: </label>
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
    
            </div> 
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <span>Don't have an account? <a href="register.php">Sign up now</a>.</span>
			
        </form>
       
        <div style="float:right; background:red;">
            <a href="index.php">â† Back</a>
        </div>
    </div> 

    </body>
</html>