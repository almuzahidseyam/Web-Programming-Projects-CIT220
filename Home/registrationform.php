<?php


$db_host='localhost';
$db_user='root';
$db_pass='';

$connection=mysqli_connect($db_host,$db_user,$db_pass);
$createdb="CREATE DATABASE school";
mysqli_query($connection,$createdb);
mysqli_select_db($connection,"school");

$createtb="CREATE TABLE regisInfo    (First_Name varchar(30) NOT NULL,
   Last_Name varchar(30) NOT NULL,
   Birthday_day varchar(30) NOT NULL,   Birthday_Month varchar(30) NOT NULL,    Birthday_Year varchar(30) NOT NULL,    Email_Id varchar(30) NOT NULL,
   Mobile_Number varchar(30) NOT NULL,
      Gender varchar(30) NOT NULL,
      Address varchar(30) NOT NULL,    Village varchar(30) NOT NULL,    Pin_Code varchar(30) NOT NULL,    Country varchar(30) NOT NULL,   Hobby_Drawing varchar(30) NOT NULL,    Hobby_Singing varchar(30) NOT NULL,
    Hobby_Other varchar(30) NOT NULL,
    ClassX_Board varchar(30) NOT NULL,
    ClassX_Percentage varchar(30) NOT NULL,
    ClassX_YrOfPassing varchar(30) NOT NULL,
    ClassXII_Board varchar(30) NOT NULL,
    ClassXII_Percentage varchar(30) NOT NULL,
    ClassXII_YrOfPassing varchar(30) NOT NULL

)";

mysqli_query($connection,$createtb);

//$insert="INSERT INTO regisInfo(Last_Name) VALUES('khan')";
//mysqli_query($connection,$insert);
//echo $_POST['Last_Name'];

   if(isset($_POST['submit'])){
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Birthday_day = $_POST['Birthday_day'];
    $Birthday_Month = $_POST['Birthday_Month'];
    $Birthday_Year = $_POST['Birthday_Year'];
    $Email_Id = $_POST['Email_Id'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Village = $_POST['Village'];
    $Pin_Code = $_POST['Pin_Code'];
    $Country = $_POST['Country'];
    $Hobby_Drawing = $_POST['Hobby_Drawing'];
    $Hobby_Singing = $_POST['Hobby_Singing'];
    $Hobby_Other = $_POST['Other_Hobby'];
    $ClassX_Board = $_POST['ClassX_Board'];
    $ClassX_Percentage = $_POST['ClassX_Percentage'];
    $ClassX_YrOfPassing = $_POST['ClassX_YrOfPassing'];
    $ClassXII_Board = $_POST['ClassXII_Board'];
    $ClassXII_Percentage = $_POST['ClassXII_Percentage'];
    $ClassXII_YrOfPassing = $_POST['ClassXII_YrOfPassing'];   
}

$insert="INSERT INTO regisInfo(First_Name,Last_Name,Birthday_day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,Village,Pin_Code,Country,Hobby_Drawing,Hobby_Singing,Hobby_Other,ClassX_Board,ClassX_Percentage,ClassX_YrOfPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrOfPassing) VALUES('$First_Name','$Last_Name','$Birthday_day','$Birthday_Month','$Birthday_Year','$Email_Id','$Mobile_Number','$Gender','$Address','$Village','$Pin_Code','$Country','$Hobby_Drawing','$Hobby_Singing','$Hobby_Other','$ClassX_Board','$ClassX_Percentage','$ClassX_YrOfPassing','$ClassXII_Board','$ClassXII_Percentage','$ClassXII_YrOfPassing')";




mysqli_query($connection,$insert);

mysqli_close($connection);




?>













<html>
<head>

<title>Student Registration Form</title>
<link rel="stylesheet" href="main.css">
        
        <!-- font awesome icons-->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        
        <!-- google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Mina&display=swap" rel="stylesheet">


</head>
 
<body>
    
    
<h3>STUDENT REGISTRATION FORM</h3>
<div class="h3">
        <table class="table" border="2">
 
<table align="center" cellpadding = "10">
<form action="" method="post">
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td>
    <input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="11" />
(11 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>VILLAGE</td>
<td><input type="text" name="Village" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 

 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="Bangladesh" readonly="readonly" /></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
<br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class V</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class VIII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 

 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
   
<input type="submit" name="submit" value="Submit">
<input type="reset" value="Reset">
       
</td>
</tr>
     
 </form>
</table>
 

 
</body>
</html>