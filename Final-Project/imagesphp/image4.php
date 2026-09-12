
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Health & Beauty</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/k4.jpg" alt="Health & Beauty" style="height:185px;" />
                <div class="caption">
                    
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button 
                      style="margin-top: 50px" class="btn btn-primary btn-block">Browse</button></a>
                    <?php } else{
                        if(0){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="health.php" name="add" value="add" class="btn btn-primary btn-block" >Browse</a>
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
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder; ">Vivo V5Plus (Gold) with Offers</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">With no cost EMI option on Bajaj Finance and other credit cards</li>
  
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
