<?php

	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}

?>
<?php
include('header.php');
?>

<div class="title" align="center">
<h4><a href="logout.php" style="float:right; margin-right:30px;color:#fff; font-size:20px;">Logout</a></h4>
<h1>Welcome to Admin Dashboard</h1>

</div>
<div id="dashboard" align="center" >
	<table border="1"style="width:46%;">
	<caption >Student Details</caption>
	<tr>
	<td>1.</td><td><a href="studentadd.php">Insert Student Details</a></td>
	</tr>
	<tr>
	<td>2.</td><td><a href="studentupdate.php">Update Student Details</a></td>
	</tr>
	<tr>
	<td>3.</td><td><a href="studentdelete.php">Delete Student Details</a></td>
	</tr>
	<tr>
	<td>4.</td><td><a href="mark.php">Result</a></td>
	</tr>
	</table>
	</div>
	<div id="dash" align="center">
	<table border="1"style="width:46%; ">
	<caption>Teachers Details</caption>
	<tr>
	<td>1.</td><td><a href="teacheradd.php">Insert teacher Details</a></td>
	</tr>
	<tr>
	<td>2.</td><td><a href="teacherupdate.php">Update teacher Details</a></td>
	</tr>
	
	<tr>
	<td>3.</td><td><a href="teacherdelete.php">Delete teacher Details</a></td>
	</tr>

	</table>
    </div>
	
	<div id="ad" align="center">
	<table border="1"style="width:46%; ">
	<caption>Admission student details</caption>
	<tr>
	<td>1.</td><td><a href="admissionadd.php">Insert Student Details</a></td>
	</tr>
	<tr>
	<td>2.</td><td><a href="admissionupdate.php">Update Student Details</a></td>
	</tr>
	<tr>
	<td>3.</td><td><a href="admissiondelete.php">Delete Student Details</a></td>
	</tr>

	</table>
    </div>

</body>
</html>