<?php include "..\db\DB.php"?>
    
    <div class="page-header row">
        
        <div class="container" >
         
           <img width="auto" height="130" class="img-responsive" 
                    src="../../../PHP_All_Projects/Resturant_Integration/include/banner_fres.jpg" alt="banner">
      
            </div>
    </div>


    <div class="row sticky-top"> <!--navbar-static-top-->
        <div class="container-fluid">
            <nav class="navbar-expand-md navbar-light bg-info">

               <button class="navbar-toggler" 
                              type="button" 
                              data-toggle="collapse" 
                              data-target="#navbarSupportedContent" 
                              aria-controls="navbarSupportedContent" 
                              aria-expanded="false" 
                              aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
              </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <?php
                             mysqli_select_db($connection,"Restaurant");
                            $read="SELECT * FROM navBarItem";
                            $query=mysqli_query($connection,$read);

                            while($rows=mysqli_fetch_assoc($query)){
                            $title=$rows['cateTitle'];
                            ?>
                            <li class='nav-item'>
                            <a class='nav-link' href="..\<?php  echo $href ?>">  <?php  echo $title?></a> 
                                    </li>
                           <?php }?>
                     
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" 
                              href="#" id="navbarDropdown" 
                              role="button" 
                              data-toggle="dropdown" 
                              aria-haspopup="true" 
                              aria-expanded="false">
                         Restaurants
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <?php
                            mysqli_select_db($connection,"Restaurant");
                            $read="SELECT * FROM restaurantinfo";
                            $query=mysqli_query($connection,$read);

                            while($rows=mysqli_fetch_assoc($query)){
                            $restaurantlist=$rows['restaurantName'];
                            ?>
                            
                               <a class="dropdown-item" href="#"><?php echo $restaurantlist?></a>
                               <?php } ?>
                        </div>
                         </li>            
                    </ul>
                                           
                             <!-- Search
                   <form action="search.php" method="post" class="form-inline my-2 my-lg-0">
        <div class="input-group">
            <input class="form-control " type="text" name="searchTopic" placeholder="Search For Food">
            <div class="input-group-append">
                <button class="btn btn-warning" type="submit" name="search">Search</button>
            </div>
        </div>
        </form> 
                   
                   -->
                   
                   
                   
                   
                   
                   
               </div>
     
     </nav>
    </div>
 </div>

<!-- Navigation -->
<!--
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
-->
            <!-- Brand and toggle get grouped for better mobile display -->
<!--
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
-->
            <!-- Collect the nav links, forms, and other content for toggling -->
<!--
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
<!--
                    <?php
                    //while($rows=mysqli_fetch_assoc($query)){
                       // $title=$rows['cateTitle'];
                      //echo"  <li><a href='#'>$title</a> </li>";
                        
                        
                //     }
                   ?>
-->
<!--
                </ul>
            </div>
-->
            <!-- /.navbar-collapse -->
<!--        </div>-->
        <!-- /.container -->
<!--    </nav>  -->


