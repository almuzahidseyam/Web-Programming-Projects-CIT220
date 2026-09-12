<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
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
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] == "admin"){
        header("location: index.php");
        exit;
    }
    

    require_once "./../config.php";
    
    
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
        
        
        if(empty($username_err) && empty($password_err)){
          
            $sql = "SELECT id, email, password FROM admins WHERE email = ?";
            
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
                                $_SESSION["role"] = "admin";                          
                            
                               
                                header("location: index.php");
                            
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
        <div class="wrapper-title"><h2>Admin Login</h2>
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
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            
			
        </form>
    </div> 

    </body>
</html>