<?php

  $db = mysqli_connect("localhost", "root", "", "customer");

  if (isset($_POST['upload'])) {
  	
    $image = $_FILES['image']['name'];
   
    $name = $_POST['name'];
  	
  	$review = $_POST['review'];

  	$target = "img/".basename($image);

  	$sql = "INSERT INTO data (name,image, review) VALUES ('$name','$image', '$review')";
  
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		
  	}else{
  	
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Omni Food| menu</title>
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Omni</span> Food</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li class="current"><a href="menu.php">Menus</a></li>
            <li><a href="order.php">Order Now</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
        <div class="container">
          <div class="head"><h1>Menu</h1></div>
         
         
        </div>
      </section>
    <section id="boxes">
      <div class="container">
        
        <?php
        $connect = mysqli_connect('localhost','root','','food');
        $query = 'select * from data ORDER by id ASC';
        $result = mysqli_query($connect,$query);
    
        if($result){
            if(mysqli_num_rows($result)>0){
                while($show = mysqli_fetch_assoc($result)){
                   // print_r($show);
                    ?>
                    <div class="box">
                        <form method="post" action="index.php">
                            <div >
                                <img src = "img/<?php echo $show['image'];?>" class="img-responsive"/>
                                <h3><?php echo $show['name'];?></h3>
                                <p><?php echo $show['comment'];?></p>
                             </div>
                    </div>
                <?php
                }
            }
        }?>
        
       </div>
     </section>
      
     
   
    
      <section class="Give_review">
        <h1 class="review_title">You Can Give Your Feedback Here</h1>
        <form method="POST" action="menu.php" enctype="multipart/form-data">

          <div class="picture">
          <label> Your Pic : </label>
         
            <input type="file" name="image">
          </div><br>
          <div class="name">
          <label> Name : </label>
          <input type="text" name="name">
          </div>
          
         
          <br>
          <div class="feedback"><label>Feedback : </label>
             <textarea 
              id="text" 
              cols="40" 
              rows="4" 
              name="review" 
              placeholder="Your feedback">
             </textarea></div>
          
          <div>
            <button style="margin-top:10px; margin-bottom:10px;" class="button_1"type="submit" name="upload">POST</button>
          </div>
        </form>
      </section>

 

    <footer>
      <p>Omni Foods, Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
