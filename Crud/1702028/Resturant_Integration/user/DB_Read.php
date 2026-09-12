<?php include "DB.php"; ?>

<?php
    mysqli_select_db($connection,"logInInfo");  // selecting db
     $read="SELECT * FROM loginfolist"; //query from desired table 
    $query=mysqli_query($connection,$read);
   if(! $query)
   die("Cannot read from Database") ;
   // mysqli_close($connection);
    ?>
        <html>
            <head>
            </head>
            <body>
                <div align="center" style="background-color:cyan">
            <h1>    Read Koresi        </h1>
                   <table width="200" border="2" cellspacing="2" cellpadding="2">
                       <thead>
                           <div>
                           Login info
                               </div>
                       </thead>
                      
                  <tbody>
                       <tr>
                            <td> ID </td>
                            <td> USERNAME </td>
                            <td>  PASSWORD</td>
                       </tr>
            <?php
                
//                   $rows=mysqli_fetch_assoc($query);
//                  ai vairable e rakhle sobsomy e one thake tai crash kore  
//                    foreach( $rows as $value ){
//                       foreach( $value as $values ){
//                        echo $values . " ";
//                    } 
//                    }
                while( $rows=mysqli_fetch_assoc($query)) {
               // print_r($rows) ; 
                        $tid=$rows['ID'];
                        $tuser=$rows['username'];
                        $tpass=$rows['password'];
                 
           echo " <tr>
              <td> $tid</td>
              <td>$tuser</td>
              <td>$tpass</td>
            </tr>";
       
                     }              
                ?>
            </tbody>
        </table>
            </div>
            </body>

        </html>