
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading"> 
                        <h3 class="panel-title" style="text-align: center">Sports & Outdoors</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/k6.jpg" alt="sports" style="height:200px;" />
                <div class="caption">
                    
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button 
                      style="margin-top: 50px" class="btn btn-primary btn-block">Browse</button></a>
                    <?php } else{
                        if(0){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="sports.php?id=6" name="add" value="add" class="btn btn-primary btn-block" >Browse</a>
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
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Moto G Plus, 4th Gen (Black, 32 GB)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">16 MP primary camera with laser focus, PDAF and Professional mode, 5 MP wide angle front camera with display flash</li>
  
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
