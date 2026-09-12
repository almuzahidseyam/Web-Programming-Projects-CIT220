<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php include "head.php"?>

<body>
<!-- Navigation & Banner -->
<?php include "navigation_search.php"?>
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Res info Column -->
            <div class="col-lg-9">

                <h1 class="display-4 text-center text-primary">
                   Search Results 
                </h1>
                
                   <div class="row">
              <?php 
                         if(isset($_POST['search'])){
                             $searched=$_POST['searchTopic'];
                             mysqli_select_db($connection,"Restaurant");
                             $query1="SELECT *  FROM lunch WHERE items LIKE '%$searched%' ";
                             $query2="SELECT *  FROM breakfast WHERE items LIKE '%$searched%' ";
                             $query3="SELECT *  FROM dinner WHERE items LIKE '%$searched%' ";
                             
                             $search_query1=mysqli_query($connection,$query1);
                             $search_query2=mysqli_query($connection,$query2);
                             $search_query3=mysqli_query($connection,$query3);
                             
                             if(!$search_query1&&!$search_query2&&!$search_query3){
                                 die("Query Failed". mysqli_error($connection));
                             }
                             $countRows=mysqli_num_rows($search_query1)+mysqli_num_rows($search_query2)+mysqli_num_rows($search_query3);
                             if($countRows==0)
                                 echo "<h3> Sorry No Items Found</h3>";
                             else{
                                   echo "<h3> someresults</h3>";
                                  echo "    <div class='row'>";
               
   

                        ?>
                    <table>
                    <tbody>
                    <?php
                     while($rows=mysqli_fetch_assoc($search_query1)){
                         $item=$rows['items'];
                       

                   
                   ?>
                    
                 <tr>
              <td><?php echo $item ?></td>
            
            </tr>
                         
                     <?php }?>
                    </tbody>
                    </table>
                <table>
                    <tbody>
                 <?php
                     while($rows=mysqli_fetch_assoc($search_query2)){
                         $item=$rows['items'];
                       

                   
                   ?>
                    
                    <tr>
              <td><?php echo $item ?></td>
            
            </tr>
                         
                     <?php }?>
                    </tbody>
                       </table>
                 <?php
                     while($rows=mysqli_fetch_assoc($search_query3)){
                         $item=$rows['items'];
                       

                   
                   ?>
                    
                          <tr>
              <td><?php echo $item ?></td>
            
            </tr>
                         
                     <?php }?>
                        </tbody>
                    </table>
                    
                    </div>
                             
                       <?php   }  ?> 
                             
                             
                      <?php   }  ?> 
                
                
                
              
                
                
                
                
                       <!-- Pager -->
      
            <nav aria-label="Page navigation example">
                  <ul class="pagination pg-blue">
                    <li class="page-item"><a class="page-link">Previous</a></li>
                    <li class="page-item"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">Next</a></li>
              </ul>
            </nav>
          
                 
               
<!--
            <div>
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
-->
                
             </div>
                
                <!-- Blog Sidebar Widgets Column -->
                <?php include "sidebar.php"?>

           
        </div>
        <!-- /.row -->
        
    </div>
    <!-- /.container -->
            
        <hr>
        <!-- Footer -->
    <?php include "footer.php"?>

</body>
            

</html>
