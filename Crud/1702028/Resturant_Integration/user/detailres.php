<?php session_start();?>
<?php include "..\db\DB.php"?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php include "..\include\head.php"?>
    <style>
    .big-checkbox 
        {
            width: 20px; height: 20px;
        }
    </style>

<body>
<!-- Navigation & Banner -->
<?php include "navigation_search.php"?>

    <?php
    
                            $resName    =   $_SESSION['resName'];
                            $resOwner   = $_SESSION['resOwner'];
                            $resNumber =  $_SESSION['resNumber'];
                            $resAddress  =    $_SESSION['resAddress'];
                            
                           
                        
                   mysqli_select_db($connection,"Restaurant");
                      
                      if(isset($_POST['bpost'])){
                       
                        $b01=  $_POST['b01'];
                        $b02=  $_POST['b02'];
                        $b03= $_POST['b03'];
                        $pb01= $_POST['pb01'];
                        $pb02=$_POST['pb02'];
                        $pb03= $_POST['pb03'];
                        $Udate = $_POST['Udate'];
                        $insert="INSERT INTO breakfast(resID,resName,items,unitPrice,up_date) ";
                        $insert.="VALUES ($resNumber,'$resName','$b01','$pb01','$Udate')";
                        $query=mysqli_query($connection,$insert);
                        $insert="INSERT INTO breakfast(resID,resName,items,unitPrice,up_date) ";
                        $insert.="VALUES ($resNumber,'$resName','$b02','$pb02','$Udate')";
                        $query=mysqli_query($connection,$insert);
                        $insert="INSERT INTO breakfast(resID,resName,items,unitPrice,up_date) ";
                        $insert.="VALUES ($resNumber,'$resName','$b03','$pb03','$Udate')";
                        $query=mysqli_query($connection,$insert);
                          
                      }
                    echo  "$Udate";
                           
                      if(isset($_POST['lpost'])){
                       
                          
                            $l01 = $_POST['l01'];
                            $l02 = $_POST['l02'];
                            $l03 = $_POST['l03'];
                            $pl01 = $_POST['pl01'];
                            $pl02 = $_POST['pl02'];
                            $pl03 = $_POST['pl03'];
                            $Udate = $_POST['Udate'];
                            $insert="INSERT INTO lunch(resID,resName,items,unitPrice,up_date) ";
                            $insert.="VALUES  ($resNumber,'$resName','$l01','$pl01','$Udate')";
                            $query=mysqli_query($connection,$insert);
                            $insert="INSERT INTO lunch(resID,resName,items,unitPrice,up_date) ";
                            $insert.="VALUES  ($resNumber,'$resName','$l02','$pl02','$Udate')";
                            $query=mysqli_query($connection,$insert);
                            $insert="INSERT INTO lunch(resID,resName,items,unitPrice,up_date) ";
                            $insert.="VALUES  ($resNumber,'$resName','$l03','$pl03','$Udate')";
                            $query=mysqli_query($connection,$insert);
                          
                      }
                           
                        
                      if(isset($_POST['dpost'])){
                        
                               
                             $d01 = $_POST['d01'];
                             $d02 = $_POST['d02'];
                             $d03 = $_POST['d03'];
                             $pd01 = $_POST['pd01'];
                             $pd02 = $_POST['pd02'];
                             $pd03 = $_POST['pd03'];
                             $Udate = $_POST['Udate'];
                             $insert="INSERT INTO dinner(resID,resName,items,unitPrice,up_date) ";
                             $insert.="VALUES  ($resNumber,'$resName','$d01','$pd01','$Udate')";
                             $query=mysqli_query($connection,$insert);
                             $insert="INSERT INTO dinner(resID,resName,items,unitPrice,up_date) ";
                             $insert.="VALUES  ($resNumber,'$resName','$d02','$pd02','$Udate')";
                             $query=mysqli_query($connection,$insert);
                             $insert="INSERT INTO dinner(resID,resName,items,unitPrice,up_date) ";
                             $insert.="VALUES  ($resNumber,'$resName','$d03','$pd03','$Udate')";
                             $query=mysqli_query($connection,$insert);
                       
                      
                      }
                          

   //   justify-content-center => Horizontal ||
        //  align-items-center => Vertical    
        
    ?>
    
    <!-- Page Content -->
    <div class="container-fluid">
          <h1 class="display-4 font-weight-bold text-center" style="color: crimson">
                   Welcome <?php echo $resName ?> 
                </h1>
<!--<form action="" method="post">-->
        <div class="row mt-5"> 
           
            
             <!-- Column 1-->
            <div class="col-sm-2 my-4" style="background-color: lightseagreen; border: solid 2px #DA4245; border-radius: 10px">
                
                 <div class="clearfix">
                  <div class="float-left">
                    <h4 class="text-danger">Profile</h4>
                Name: <?php echo $resOwner ?> <br>
                Mobile: 0<?php echo $resNumber ?> <br>
                Address: <?php echo  $resAddress ?> <br>
<!--                      <form action="" method="post">-->
<!--
                        Pick Today's Date
                         <input  type="date"  name="Udate"> 
-->
<!--                     </form>-->
                 </div>
               </div>
          </div>
   
            
            
            <!-- Column 2-->
            <div class="col-md-10 my-4">
                 <div class="clearfix">
                        <div class="float-right">
                            <div class="row">
                    
                   
<!--                           breakfast div-->
                                <div class="col-md-4 mb-4">
                              <form action="" method="post">
                                      <div style="background-color: aquamarine; border: solid 1px #DA4245; border-radius: 5px">
                                             <h1 class="text-center">Breakfast</h1>
                                       <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Item ID</th>
                                            <th>Item Name</th>
                                            <th>Unit Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         Pick Today's Date
                         <input  type="date"  name="Udate" style="border-color: crimson; color: aqua; background-color: coral; border-radius: 4px">
                                        <tr>
                                            <th >1</th>
                                            <td><input class="big-checkbox" type="checkbox" name="b01" value="Vat"> Vat</td>
                                             <td><input style="background-color: azure; border-radius: 10px"  type="text" size="1" name="pb01"    maxlength="3"></textarea> tk</td>
                                        </tr>
                                         <tr>
                                            <th >2</th>
                                            <td><input class="big-checkbox" type="checkbox" name="b02" value="Murgi">  Murgi </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pb02" maxlength="3"> tk</td>
                                        </tr>
                                         <tr>
                                            <th >3</th>
                                            <td><input class="big-checkbox" type="checkbox" name=" b03" value="Dal">  Dal </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pb03" maxlength="3"> tk</td>
                                        </tr>
                                </tbody>
                            </table>        
                      </div>
                          <button class="btn btn-outline-success btn-block" type="submit" name="bpost">Post Item For Public</button>
                </form>
             </div>
                                
                                <!--                           Lunch div-->
                                               <div class="col-md-4 mb-4">
                           <form action="" method="post">
                                      <div style="background-color: aquamarine; border: solid 1px #DA4245; border-radius: 5px">
                                             <h1 class="text-center">Lunch</h1>
                                       <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Item ID</th>
                                            <th>Item Name</th>
                                            <th>Unit Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         Pick Today's Date
                         <input  type="date"  name="Udate" style="border-color: crimson; color: aqua; background-color: coral; border-radius: 4px">
                                        <tr>
                                            <th >1</th>
                                            <td><input class="big-checkbox" type="checkbox" name="l01" value="Khichuri"> Khichuri</td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pl01" maxlength="3"> tk</td>
                                        </tr>
                                         <tr>
                                            <th >2</th>
                                            <td><input class="big-checkbox" type="checkbox" name="l02" value="Murgi">  Murgi </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pl02" maxlength="3"> tk</td>
                                        </tr>
                                         <tr>
                                            <th >3</th>
                                            <td><input class="big-checkbox" type="checkbox" name="l03" value=" Biriyani">  Biriyani </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pl03"  maxlength="3"> tk</td>
                                        </tr>
                                </tbody>
                            </table>        
                      </div>
                   <button class="btn btn-outline-success btn-block" type="submit" name="lpost">Post Item For Public</button>
               </form>
             </div>
                                
                                <!--                          Dinner div-->
                                               <div class="col-md-4 mb-4">
                              <form action="" method="post">
                                      <div style="background-color: aquamarine; border: solid 1px #DA4245; border-radius: 5px">
                                             <h1 class="text-center">Dinner</h1>
                                       <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Item ID</th>
                                            <th>Item Name</th>
                                            <th>Unit Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         Pick Today's Date
                         <input  type="date"  name="Udate" style="border-color: crimson; color: aqua; background-color: coral; border-radius: 4px">
                                        <tr>
                                            <th >1</th>
                                            <td><input class="big-checkbox" type="checkbox" name="d01" value="Vat"> Ruti </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pd01" maxlength="3"> tk</td>
                                        </tr>
                                         <tr>
                                            <th >2</th>
                                            <td><input class="big-checkbox" type="checkbox" name="d02" value="Murgi">  Dim </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pd02"  maxlength="3"> tk</td>
                                        </tr>
                                         <tr>
                                            <th >3</th>
                                            <td><input class="big-checkbox" type="checkbox" name="d03" value=" Dal">  Dal </td>
                                             <td><input style="background-color: azure ; border-radius: 10px"  type="text" size="1" name="pd03" maxlength="3"> tk</td>
                                        </tr>
                                </tbody>
                            </table>        
                      </div>
                     <button class="btn btn-outline-success btn-block" type="submit" name="dpost">Post Item For Public</button>
               </form>
             </div>
                               
               

               
            
<!--                      table er div guli sesh         -->
                    </div>
<!--
                             <form action="" method="post"><div class="justify-content-center">
                   <button class="btn btn-outline-success btn-block" type="submit" name="post">Post Item For Public</button></div>
               </form>
-->
            </div>
            
        </div>
        <!-- /.row -->
           </div>
            </div>
<!--    </form>-->
    </div>
    <!-- /.container -->
            
        <hr>
    
        <!-- Footer -->


</body>
            

</html>


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
                






