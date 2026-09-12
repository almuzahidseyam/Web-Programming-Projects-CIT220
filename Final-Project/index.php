<?php require 'includes/common.php';
 require 'login_script.php';
 require 'signup_script.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/mainhead.php';?>
        <title>Pstu Store</title>
    </head>
    <body>
        <?php include 'includes/header.php';
        ?>
        <div class="container-fluid">
          <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="alert alert-success text-capitalize text-center text-info"><strong>WELCOME</strong></div> 
                  
                </div>
          </div>
          
            <?php 

            if(isset($_SESSION['email'])) 

            {?>
              
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="alert alert-success text-capitalize text-center text-info"><strong>WELCOME - </strong><?php echo $_SESSION['name'];?></div> 
                    
                </div>
                
            </div>


             
            <?php } ?>
            <?php if(isset($_GET['message'])){?>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="alert alert-success text-capitalize text-center text-info"><?php echo $_GET['message'];?></div> 
                    
                </div>
                
            </div>
            <?php } ?>
            <div class="row" >
      <?php include 'imagesphp/image1.php';?>
      <div class="clearfix visible-xs"></div>          
      <?php include 'imagesphp/image2.php';?>
      <div class="clearfix visible-xs"></div>          
      <?php include 'imagesphp/image3.php';?>
      <div class="clearfix visible-xs"></div>
            </div>
        <div class="row">
      <?php include 'imagesphp/image4.php';?>
      <div class="clearfix visible-xs"></div>      
      <?php include 'imagesphp/image5.php';?>
      <div class="clearfix visible-xs"></div>
      <?php include 'imagesphp/image6.php';?>
      <div class="clearfix visible-xs"></div>
            
        </div>
        <div class="row">
      <?php include 'imagesphp/image7.php';?>
      <div class="clearfix visible-xs"></div>
      <?php include 'imagesphp/image8.php';?>
      <div class="clearfix visible-xs"></div>      
      <?php include 'imagesphp/image9.php';?>
      <div class="clearfix visible-xs"></div>      
        </div>
        </div>
<?php include 'includes/footer.php';?>     
        
   </body>
</html>
