<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php include "include/head.php"?>

<body>
<!-- Navigation & Banner -->
<?php include "include/navigation.php"?>
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Res info Column -->
            <div class="col-lg-10">

                <h1 class="display-4 text-center text-success">
                    Welcome to Food Relm
                </h1>
                
                <div class="row">
                  <!--   1st Restu-->

                        <?php
    mysqli_select_db($connection,"Restaurant");
    $read="SELECT * FROM restaurantinfo";
    $query=mysqli_query($connection,$read);

                        ?>
                    
                    <?php
                     while($rows=mysqli_fetch_assoc($query)){
                         $restaurantID=$rows['restaurantID'];
                         $restaurantName=$rows['restaurantName'];
                         $restaurantOwner=$rows['restaurantOwner'];
                         $restaurantAddress=$rows['restaurantAddress'];
                         $restaurantAbout=$rows['restaurantAbout'];
                     //     $upTime=$rows['upTime'];
                      
                         
                         
                     
                        
                   ?>
                    
                    <div class="col-lg-4 col-md-6 my-4">
                        <div class="card m-1 border-danger">
                <!--  card    er    header-->
                            <div class="card-header bg-dark"> 
                               <ul class="nav nav-tabs card-header-tabs">
                                  <li class="nav-item">
                                      <a class="nav-link" href="">Breakfast</a>
                                 </li>
                                 <li class="nav-item">
                                      <a class="nav-link" href="">Lunch</a>
                               </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="">Dinner</a>
                               </li>
                                </ul>     
                            </div>

                            <img class="card-img-top" src="include/siyam.png" alt="Potaka">
                                  <!-- card  er     Body  -->
                
                           <div class="card-body bg-warning">
                               <h4 class="card-title">
                                   <?php echo $restaurantName?>
                                   <br>
                                   <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small> 
                               </h4>
                   
                               <h6 class="card-subtitle text-muted"><?php echo $restaurantAddress?></h6>
                               <p class="card-text"> Last Updated <?php echo $upTime?></p>
                               <a  class="btn btn-danger" href="include/cus_detailres.php">Hurry Go For Food !!</a>
                              </div>
                              <!--  card   er     Footer-->
                         <div class="card-footer text-center text-success">Hotline 0<?php echo $restaurantID?></div>
                        
                      </div>
                    
            </div>
                         
                     <?php }?>
                    
                    </div>
                                <!-- First res -->
<!--
                
                <div class="col-lg-3 col-md-5 mb-4">
            <div class="card ">
              <a href="#"><img class="card-img-top" src="" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
-->
      
              

                
                       <!-- Pager 
      
            <nav aria-label="Page navigation example">
                  <ul class="pagination pg-blue">
                    <li class="page-item"><a class="page-link">Previous</a></li>
                    <li class="page-item"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">Next</a></li>
              </ul>
            </nav>-->
          
                 
               
<!--
            <div>
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
-->
                
             </div>
                
                <!-- Blog Sidebar Widgets Column -->
                <?php include "include/sidebar.php"?>

           
        </div>
        <!-- /.row -->
        
    </div>
    <!-- /.container -->
            
        <hr>
        <!-- Footer -->
    <?php include "include/footer.php"?>

</body>
            

</html>