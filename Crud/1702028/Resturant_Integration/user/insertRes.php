<?php include "DB.php"?>


<?php

 if(isset($_POST['register'])){
     $resName=$_POST['resName'];
     $ownerName=$_POST['ownerName'];
     $number=$_POST['number'];
     $password=$_POST['password'];
     $address=$_POST['address'];
     $about=$_POST['about'];
     
    /// ata use korle =>  mysqli_real_escape_string() accepts the escape characters like ',"/`~ 
     $resName=mysqli_real_escape_string($connection,$resName);
     $ownerName=mysqli_real_escape_string($connection,$ownerName);
     $number=mysqli_real_escape_string($connection,$number);
     $password=mysqli_real_escape_string($connection,$password);
     $address=mysqli_real_escape_string($connection,$address);
     $about=mysqli_real_escape_string($connection,$about);
     //ata password encrypt korar jonno
     //     $salt = "ilovemycoding15";
     //     $password = crypt($password,$salt);
     
     
 }
     
$create="CREATE DATABASE IF NOT EXISTS restaurant";
$DB_Res=mysqli_query($connection,$create);

if(!$DB_Res){
    die("Database not Created");
}
else{
    $db=mysqli_select_db($connection,"restaurant");  
    $table="CREATE TABLE IF NOT EXISTS restaurantinfo
            (restaurantID int(11) NOT NULL ,
            restaurantName varchar(30) NOT NULL,
            restaurantOwner	varchar(20) NOT NULL,
            password varchar(100)  NOT NULL,
            restaurantAddress varchar(100) NOT NULL,
            restaurantAbout	varchar(200) NOT NULL,
            PRIMARY KEY(restaurantID)
            )";
            $TB_restaurantinfo= mysqli_query($connection,$table);
    
    
    
	 if($resName!=NULL&&$ownerName!=NULL&&$number!=NULL&&$password!=NULL&&$address!=NULL) {
    
         $insert="INSERT INTO restaurantinfo(restaurantID,restaurantName,restaurantOwner,password,restaurantAddress,restaurantAbout) ";
         $insert.="VALUES($number,'$resName', '$ownerName', '$password', '$address', '$about')";
         mysqli_query($connection,$insert);
         
          //Creating Individual ResTable of itemID	restuID	breakfast	pbreak	lunch	plunch	dinner	pdinner
          $table1="CREATE TABLE IF NOT EXISTS res_$resName
            (dateofpost varchar(50) NOT NULL,
            itemID int(200) NOT NULL  AUTO_INCREMENT,
            restuID int(11) NOT NULL,
            breakfast varchar(30) NOT NULL,
            pbreak int(200) NOT NULL,
            lunch varchar(20) NOT NULL,
            plunch int(200) NOT NULL,
            dinner  varchar(20) NOT NULL,
            pdinner int(200) NOT NULL,
            FOREIGN KEY(restuID) REFERENCES restaurantinfo(restaurantID),
            PRIMARY KEY(itemID)
            )";
           $TB_restaurantinfo= mysqli_query($connection,$table1);
         
         
          
            echo "Information Submitted!";               
            }
    
            else{
                echo "No Information Submitted!";
		      // exit();
                }
    
            mysqli_close($connection);
    
            }
       

?>