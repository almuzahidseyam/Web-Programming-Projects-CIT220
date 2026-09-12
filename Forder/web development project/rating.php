<!DOCTYPE html>
<html>
<head>
  <title></title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>
<body>


  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Online Food Ordering System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="indexx.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aboutus.php">About Us</a>
          <a class="dropdown-item" href="review.php">Review of Customer</a>
          <a class="dropdown-item" href="rating.php">Rating of Customer</a>
          
         
      </div>
         
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="fastfood.php">Fast Food</a>
          <a class="dropdown-item" href="Thaifood.php">Thai Food</a>
          <a class="dropdown-item" href="chinesefood.php">Chinese Food</a>
          <a class="dropdown-item" href="mexicanfood.php">Mexican Food</a>
          <a class="dropdown-item" href="biryani.php">Biryani</a>
      </div>
         
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search</a>
      </li>
      

    
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>

  </div>

</nav>
<link rel="stylesheet" href="https://maxcdn.bootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>



<!DOCTYPE html>
<html>
<head>
  <title>Top Rated Items</title>
  <style>
    

    

.rating {
  font-family: Arial ;
  margin: 0 auto; 
  max-width: 800px; 
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}


.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}


.right {
  text-align: right;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}


.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}


@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  
  .right {
    display: none;
  }
}
  </style>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="rating">


<h1 align="center">Top Rated Items</h1>

<table border="0" width="100%">

<tr>
<td width="35%" align="center" class="zoom"><img src="image/pizza1.jfif" width="75%">
<td width="35%" align="center" class="zoom"><img src="image/burger11.jfif" width="75%">
<td width="35%" align="center" class="zoom"><img src="image/banner18.jfif" width="100%">

</td>
</tr>

<tr>
<td align="center"><b><font size="4">Cheesy Crust Pizza</font></b></td>
<td align="center"><b><font size="4">Chicken Burger</font></b></td>
<td align="center"><b><font size="4">French Fry</font></b></td>
</tr>

<tr>
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
   
   </td>

   
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked "></span>
    <span class ="fa fa-star"></span>
   <span class ="fa fa-star"></span>
   
   </td>
   
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star "></span>
    <span class ="fa fa-star"></span>
   <span class ="fa fa-star"></span>
   </tr>
   </td>
<tr>
<td align="center"><font size="4" color="green">Price:600BDT</font></td>
<td align="center"><font size="4" color="green">Price:120BDT</font></td>
<td align="center"><font size="4" color="green">Price:60BDT</font></td>
</tr>

<table border="0" width="100%">

<tr>
<td width="35%" align="center" class="zoom"><img src="image/thaifood1.jfif" width="75%">
<td width="35%" align="center" class="zoom"><img src="image/chinese1.jfif" width="75%">
<td width="35%" align="center" class="zoom"><img src="image/maxican1.jfif" width="100%">

</td>
</tr>

<tr>
<td align="center"><b><font size="4">Thai Food 1</font></b></td>
<td align="center"><b><font size="4">Chinese Food 1</font></b></td>
<td align="center"><b><font size="4">Mexican Food 1</font></b></td>
</tr>

<tr>
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star"></span>
   
   </td>

   
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star"></span>
   <span class ="fa fa-star"></span>
   
   </td>
   
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star"></span>
   <span class ="fa fa-star"></span>
   </tr>
   </td>
<tr>
<td align="center"><font size="4" color="green">Price:150BDT</font></td>
<td align="center"><font size="4" color="green">Price:250BDT</font></td>
<td align="center"><font size="4" color="green">Price:150BDT</font></td>
</tr>

<table border="0" width="100%">

<tr>
<td width="35%" align="center" class="zoom"><img src="image/biryani1.png" width="75%">
<td width="35%" align="center" class="zoom"><img src="image/biryani2.jfif" width="80%">
<td width="35%" align="center" class="zoom"><img src="image/biryani3.jfif" width="95%">

</td>
</tr>

<tr>
<td align="center"><b><font size="4">Biryani 1</font></b></td>
<td align="center"><b><font size="4">Biryani 2</font></b></td>
<td align="center"><b><font size="4">Biryani 3</font></b></td>
</tr>

<tr>
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star"></span>
   <span class ="fa fa-star"></span>
   
   </td>

   
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star"></span>
   <span class ="fa fa-star"></span>
   
   </td>
   
<td align="center">
 <span class ="fa fa-star checked"></span>
  <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
    <span class ="fa fa-star checked"></span>
   <span class ="fa fa-star checked"></span>
   </tr>
   </td>
<tr>
<td align="center"><font size="4" color="green">Price:150BDT</font></td>
<td align="center"><font size="4" color="green">Price:250BDT</font></td>
<td align="center"><font size="4" color="green">Price:280BDT</font></td>
</tr>


</div> 

</body>
</html>