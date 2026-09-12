<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fName = $lName = $email = $gender = '';
$sql = "SELECT * FROM users WHERE id= $id";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fName = $row["first_name"];
		$lName = $row["last_name"];
		$email = $row["email"];
		$gender = $row["gender"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1 style="font-size: 6vh">Welcome <?php echo $fName." ".$lName; ?></h1>
	</center>
</div>