
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Watches & Accessories</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/k5.jpg" alt="Watches & Accessories" style="height:200px;" />
                <div class="caption">
                    
                   <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button 
                      style="margin-top: 50px" class="btn btn-primary btn-block">Browse</button></a>
                    <?php } else{
                        if(0){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="watches.php" name="add" value="add" class="btn btn-primary btn-block" >Browse</a>
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
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Oppo F1S (Gold, 64GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">13MP primary camera with normal, ultra HD, filters, GIFF, double exposure, expert mode, HDR, beauty, panorama, time lapse and 16MP front facing camera</li>
  
     
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
