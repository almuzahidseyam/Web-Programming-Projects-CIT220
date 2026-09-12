<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Omni Food| Order Now</title>
    <link rel="stylesheet" href="./css/main.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Omni</span>Food</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li class="current"><a href="order.html">Order Now</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
        <div class="container">
          <div class="head"><h1 >Order Now</h1></div>
         
         
        </div>
      </section>

   

    <section id="main">
      <div class="container">
       
"
        <aside id="sidebar">
          <div class="dark">
            <h3>Please fill up the form :</h3>
            <form action="process.php" method="POST"class="order">
  						<div>
  							<label>Name</label><br>
  							<input type="text" name = "name" placeholder="Name">
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="text" name="email" placeholder="Emial Address">
  						</div>
  						<div>
  							<label>Your Menu</label><br>
  							<input type="text" name="setmenu" placeholder="Enter the menu you want">
  						</div>
  						<button class="button_1" name="save" type="submit">Order</button>
					</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Omni Food, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
