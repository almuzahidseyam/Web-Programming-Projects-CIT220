<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php include "../include/head.php"?>

<body>
<!-- Navigation & Banner -->
<?php include "navigation_search.php"?>
    
       <u><h1 class="display-4 text-center my-4 text-primary font-weight-bold">Registration Form</h1></u>
        
   
        <div class="container mb-2 text-primary">
    
        <!-- FORM -->
        <form action="insertRes.php" method="post">
            <!-- TEXT FIELD GROUPS -->
            <div class="form-group">
                <label for>Name Of The Restaurant/Hotel</label>
                <input class="form-control" type="text" name="resName" placeholder="Name">
            </div>
            
             <div class="form-group">
                <label for>Name Of The Owner</label>
                <input class="form-control" type="text" name="ownerName" placeholder="Person's Name">
                 <small><p class="text-muted">Mihidabi Khan</p></small>
            </div>
            
             <div class="form-group">
                <label for>Mobile Number</label>
                <input class="form-control" type="text" name="number" placeholder="Number">
                 <small><p class="text-muted">Example: 01676243435 </p></small>
            </div>
          

            <div class="form-group">
                <label >Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
                 <small><p class="text-muted">Atleast 4 characters </p></small>
            </div>
            
             <div class="form-group">
                <label for>Address Of The Restaurant/Hotel</label>
                <input class="form-control" type="text" name="address" placeholder="Address">
                 <small><p class="text-muted">Example: Dumki,Patuakhali </p></small>
            </div>
           
            
            <div class="form-group">
                <label for="message">About The Hotel/Restaurant</label>
                <textarea class="form-control" name="about" rows="3"></textarea>
            </div>
           
            <button class="btn btn-success btn-block" type="submit" name="register">Register</button>
        </form>


    </div>
      <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center mt-2" style="background-color: dodgerblue; border: 1px solid #56EF1A">
                   
                       
                        <a class="btn btn-primary" href="login.php"  type="button">Login</a>
                          <label>  Copyright &copy; Goforfood.com </label>
                       
                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>
    </body>
</html>        
