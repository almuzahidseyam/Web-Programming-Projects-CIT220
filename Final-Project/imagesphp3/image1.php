
<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Cushion</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                            <img src="images/h2.jpeg" alt="Cushion" style="height:205px;" class="img-responsive" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Verano cushion cover</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Tk. 380.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(13)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
                    <?php
                    }}
                    ?>
                    </center>   
                    
                    </div>
                    
            
                </div>
                </div>        
                
                        
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bold;">Verano Cushion cover</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">Its comfortable for home use</li>
  
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
