<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/mainhead.php';?>
        <title>Pstu Store</title>
    </head>
    <body>
        <?php include 'includes/header.php';?>
        <div class="container">
                <div class="col-md-3 col-xs-12">
                    <img src="images/c1.png" alt="contact" class="img-responsive img-thumbnail" >
                    
                </div>
               </div>
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <h2 class="text-primary text-uppercase "style="margin-left: 17px"; style="font-weight: bolder;">CONTACT US</h2>
                    <form method="POST" action="contact_script.php" >
                        <div class="form-group "  >
                                    <div class="col-xs-12 " style="margin-bottom: 20px;">
                                        <div class="input-group input-group-lg" >
                                            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon-user"></span></span> 
                                            <input type="text" class="form-control left-border-none" name="name" placeholder= "Name" aria-describedby="na"  pattern="[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" />
                                             
                                        
                                      </div>
                                        <small id="na" class="form-text text-warning">name should be max 2 to 20 characters long.</small>
                                    </div>
                                </div>
                            
                        
                                <div class="form-group " style="align: center;" >
                                    <div class="col-xs-12 " style="margin-bottom: 20px;">
                                        <div class="input-group input-group-lg" >
                                            <span class=" input-group-addon transparent"><span class="glyphicon glyphicon-envelope"></span></span> 
                                            <input type="email" class="form-control left-border-none" name="email" placeholder= "Email"  aria-describedby="help" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  />
                                         
                                      </div>
                                        <small id="help" class="form-text text-muted">We'll will never share your email with anyone else.</small>
                                    </div>
                                </div>
                        
                        <div class="form-group col-xs-12 "  >
                           <textarea name="message" class="form-control" rows="8" placeholder="Enter Your Message"></textarea>
                        <?php if(isset($_GET['error12'])){?>
                            <div class="alert alert-danger" role="alert"><?php echo $_GET['error12'];?></div>
                            <?php }?>
                         </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-md " style="margin-left: 2%;margin-bottom: 30px;">Submit</button>        
                                    
                            <?php if(isset($_GET['success1'])){?>
                            <div class='alert alert-success alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $_GET['success1'];?></div>
                            <?php }?>                   
                       
                        </form>
                    
                </div>
                
                
            </div>
                
        </div>
        
        <?php include 'includes/footer.php';?>
    </body>
</html>