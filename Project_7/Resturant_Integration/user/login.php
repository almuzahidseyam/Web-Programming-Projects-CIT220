<?php session_start(); ?>
<?php include "..\db\DB.php" ;?>

<?php 
     if(isset($_POST['login'])){
     $number=$_POST['number'];
     $respass=$_POST['password'];
     
    /// ata use korle =>  mysqli_real_escape_string() accepts the escape characters like ',"/`~ 
     $number=mysqli_real_escape_string($connection,$number);
     $respass=mysqli_real_escape_string($connection,$respass);
    
    mysqli_select_db($connection,"Restaurant");
    $read="SELECT * FROM restaurantinfo WHERE restaurantID = {$number}";
    $query=mysqli_query($connection,$read);

 
          if (!$query){  
             die("NO SUCH RESTAURANT".mysqli_errno($connection));
         }
         
                while($rows=mysqli_fetch_assoc($query)){
                    $resNumber=$rows['restaurantID'];
                    $password=$rows['password'];
                    $resOwner=$rows['restaurantOwner'];
                    $resName=$rows['restaurantName'];
                    $resAddress=$rows['restaurantAddress'];                 
                    // $upTime=$rows['upTime'];
                    
                    }
         if($number!==$resNumber&& $respass!==$password){
            header("Location: ../index.php");
         }
         else if ($number==$resNumber&& $respass==$password){
             $_SESSION['resName']=$resName;
             $_SESSION['resOwner']=$resOwner;
             $_SESSION['resNumber']=$resNumber;
             $_SESSION['resAddress']=$resAddress;
              header("Location: detailres.php");
         }
         else{
              header("Location: ../index.php");
             
         }
         
         
         

                     }

?>


<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php include "../include/head.php"?>
    

<body>
<!-- Navigation & Banner -->
<?php include "../include/navigation.php"?>
        
       <u><h1 class="display-4 text-center my-4 text-info font-weight-bold">login Here</h1></u>
        
   
        <div class="container mb-2 text-info">
            <div class="row justify-content-center align-items-center">
                <!--        justify-content-center => Horizontal ||
                              align-items-center => Vertical       -->
         <div class="col-8">
        <!-- FORM -->
        <form action="" method="post">
            <!-- TEXT FIELD GROUPS -->
             <div class="form-group">
                <label for>Enter Mobile Number</label>
                <input class="form-control" type="text" name="number" placeholder="Number">
            </div>
          

            <div class="form-group">
                <label>Enter Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
                      
            <br>
              <label class="ml-4">
                    <input type="checkbox" class="form-check-input">
                      <small class="text-warning"> Save Number and Password </small>
                </label>

            <button class="btn btn-success btn-block" type="submit" name="login">login</button>
        </form>


    </div>
                </div>
        </div>
    
    
  <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center mt-2" style="background-color: dodgerblue; border: 1px solid #56EF1A">
                   
                       
                       
                          <label>  Copyright &copy; Goforfood.com </label>
                         <a class="btn btn-primary" href="registration.php"  type="button">Register</a>
                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>    
    
    
    </body>
</html>        
