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
                 This a Form
            </h1>
            <fieldset>
            <legend>Log in Form</legend>
            <form action="PHP_2_DB_Create.php" method="post">
                Username :
                <input class="form-control"  type="text" name="username" placeholder="Enter Username">
               
                <br>
              
                Password :
                <input  type="password" name="password" placeholder="Enter password">
                    </div>
          
                 <br>
                <input type="submit" name="submit">
                
                <input type="reset" name="reset">
                
                
            </form>
            </fieldset>
            
            
        </body>
        </html>
