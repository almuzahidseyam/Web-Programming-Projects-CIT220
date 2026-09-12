 <head>
<title>PSTU Agriculture Fculty</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<!--<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />-->
	
	<link rel="stylesheet" href="style.css"/>
	</head>
	<header>
	<div id="header">
	<img height="90px" width="80px"src="logo/download.jfif" alt="">
	<h1>
	Faculty of Agriculture
	</h1>
	<h2>
	Patuakhali Science and Technology University
    </h2>
	</div>
	</header>
	
	 <nav class="navbar navbar-expand-lg navbar-light bg-info">
 <!--  <a class="navbar-brand" href="#">Faculty of Agriculture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Department
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
      $hostname ='localhost';
      $hostuser ='root';
      $hostpassword = 'mysql'; 
      $dbconnection = mysqli_connect($hostname,$hostuser,$hostpassword);
      mysqli_select_db($dbconnection,"agfaculty");
       $read="SELECT DISTINCT Department FROM department";
       $queryread=mysqli_query($dbconnection,$read);
       while($rows=mysqli_fetch_assoc($queryread)){
          $Departments=$rows['Department'];

        ?>
        
		  <a class="dropdown-item" href="#">Department of <?php echo" $Departments" ;?></a>
		 <?php } ?> 
         
          </div>
		  </li>
      
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="deanmassage.php">Massage from dean</a>
          <a class="dropdown-item" href="history.php">Mission and Vission</a>
          <a class="dropdown-item" href="regstudent.php">Students registration</a>
          <a class="dropdown-item" href="registration.php">Teachers Registration</a>
          </div>
		  </li>
	  <li class="nav-item">
        <a class="nav-link" href="reaearch.php">Research</a>
      </li>

   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          search
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="search.php">Search Students</a>
          <a class="dropdown-item" href="tsearch.php">Search teachers</a>
         
          </div>
        </li>
    
	  
	  
	  
	  
	  
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Degree
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bsc.(Undergraduate)</a>
          
		  <a class="dropdown-item" href="#">Msc.(Graduate)</a>

     
		  
		 </div>
      </li>
     
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
  </div>
</nav>
