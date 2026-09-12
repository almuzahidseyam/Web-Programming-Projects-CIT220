
             <div class="col-xs-12 col-md-4" style="margin-top: 15px; "> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Mate</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/h1.jpeg" alt="Mate" style="height:160px;" />
                <div class="caption">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2" style="margin-top: 18px;">Click For Description</button>

                    <h3 style="font-weight:bold; " class="text-primary">Flour Mate</h3>
                    <p style="font-weight:900; color:#1b6d85;">Price: Tk. 499.00</p>
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                        if(check_if_added_to_cart(15)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-primary btn-block" >Add To Cart</a>
                    <?php
                    }}
                    ?>
                </div>
                    </center>   
                    
                    </div>
                    
            
                </div>
                </div>       
                
               
        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Flour Mate</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">Very comfortable use for home purpose</li>
  
</ul>  
        
      </div>
   
    </div>
  </div>
</div>