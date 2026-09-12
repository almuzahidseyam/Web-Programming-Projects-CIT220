<?php include "PHP_2_BD.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form PHP</title>
    <!-- Bootstrap -->
      <link href="../Bootstrap4/css/bootstrap-4.3.1.css">
  </head>
     
            
        <body>
            
             <h1 class="text-danger" align="center">
                 This a Upadating Form
            </h1>
            <fieldset>
            <legend>Update Form</legend>
            <form action="PHP_2_DB_Update.php" method="post">
                Username :
                <input class="form-control"  type="text" name="username" placeholder="Enter Username">
               
                <br>
              
                Password :
                <input  type="password" name="password" placeholder="Enter password">
                    </div>
          
                 <br>
                <lebel>Select Id From Here</lebel>
                <select name="id">
                    <?php
                     mysqli_select_db($connection,"logInInfo");  // selecting db
                    $read="SELECT * FROM loginfolist"; //query from desired table 
                    $query=mysqli_query($connection,$read);
                    
                    while( $rows=mysqli_fetch_assoc($query)) {
                            $id=$rows["ID"];
                echo "<option value='$id'>$id</option>";
                    }
                 ?>
                </select>
                
                <br>
                 <br>
                
                <input type="submit" name="update" value="Update">
                <input type="reset" name="reset">
                
                
            </form>
            </fieldset>
            
            
        </body>
        </html>
