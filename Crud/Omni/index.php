<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
  
    <title>Omni Food | Welcome</title>
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
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menus</a></li>
            <li><a href="order.php">Order Now</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <div class="circles">
        <img src="image/logo.png">
        <div class="circle"><h1>OmniFood <br>Bristo</h1></div>
       
        <p>Serving Dilicious Foods <br>Since 1999</p>
       </div>
      </div>
    </section>
    <section class="about">
      <div class="round centers">
          <h1 id="about_h1">
              About the OmniFood
            </h1>
            <p>
              Omni Food is one of the cities distrination<br> resturents.Quints and exostic, this eatery is <br>well-loved because of it's wonderful menu.
            </p>
      </div>
      
    </section>
    <section class="review">
      <h1> What Foodies Says :  </h1>
      <div class="container">
        <div class="aboutbox">
        <?php
        $connect = mysqli_connect('localhost','root','','customer');
        $query = 'select * from data ORDER by id ASC';
        $result = mysqli_query($connect,$query);
    
        if($result){
            if(mysqli_num_rows($result)>0){
                while($show = mysqli_fetch_assoc($result)){
                   // print_r($show);
                    ?>
                    <div class="boxs ">
                        <form method="post" action="index.php">
                            <div class="show">
                                <img src = "img/<?php echo $show['image'];?>" class="img-responsive"/>
                                <h4><?php echo $show['name'];?></h4>
                                <p><?php echo $show['review'];?></p>
                             </div>
                    </div>
                <?php
                }
            }
        }?>
        </div>
      </div>
    </section>
    <section class="findus">
      <div class="image">
        <img style="border-radius: 50%" src="image/circle.jpg">
      </div>
      <div class="findtext">
        <h1>Find Us Here</h1>
        <h3>Mailing Address</h3>
        <h4>123 Mirpur,Dhaka,Bangladesh</p>
        <h3>Email Address</h3>
        <h4>omnifood@gmail.com</p>
        <h3>Phone Number</h3>
        <h4>(123) 456 7890</p>

      </div>
    </section>
             
 



  

    

    <footer>
      <p>Omni Foods, Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
