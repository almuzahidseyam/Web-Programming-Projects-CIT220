
            <div class="col-xs-12 col-md-4" style="margin-top: 15px; ">              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Men's Fashion</h3>
                    </div>
                    <div class="panel-body" >
                        <center>
                    <img src="images/k8.jpg" alt="Men's" style="height:160px;" />
                <div class="caption">
                    
                    <?php if(!isset($_SESSION['email'])){?>
                    <a href="#login" data-toggle="modal" data-target="#login"><button 
                      style="margin-top: 50px" class="btn btn-primary btn-block">Browse</button></a>
                    <?php } else{
                        if(0){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }else{?>
                    <a href="men.php" name="add" value="add" class="btn btn-primary btn-block" >Browse</a>
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
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bolder;">Micromax Canvas Fire 5 Q386 (Champagne)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="glyphicon glyphicon-remove-circle" ></span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
  <li class="list-group-item text-info text-center">8MP primary camera with auto focus and 5MP front facing camera</li>
  
    
</ul>  
        
      </div>
   
    </div>
  </div>
</div>
