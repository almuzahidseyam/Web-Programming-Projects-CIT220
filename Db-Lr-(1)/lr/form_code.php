<?php
require_once('connection.php');

$trnx = $id = '';

$trnx = $_POST['trnx'];

$sql = "SELECT * FROM trnx WHERE trnx='$trnx'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	
	    	//<div class='alert alert-success'><strong>Submitted !</strong></div>
    header("Location: login.php");
}
else
{
    echo "Transaction ID not matched";
}