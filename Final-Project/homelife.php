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
        include 'includes/check-if-added.php';?>
        <div class="container-fluid">
            <?php if(isset($_SESSION['email'])){?>
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
      <?php include 'imagesphp3/image1.php';?>
      <div class="clearfix visible-xs"></div>          
      <?php include 'imagesphp3/image2.php';?>
      <div class="clearfix visible-xs"></div>          
      <?php include 'imagesphp3/image3.php';?>
      <div class="clearfix visible-xs"></div>
            </div>
        
        </div>
        </div>
<?php include 'includes/footer.php';?>     
        
   </body>
</html>
