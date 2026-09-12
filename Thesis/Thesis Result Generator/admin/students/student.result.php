<?php
session_start();
include '../../connections/dbConn.php';


$sql = "SELECT student_id,
	((supervisor*60/100)+((IFNULL(internal_1*40/100, 0)+IFNULL(internal_2*40/100, 0)+IFNULL(internal_3*40/100, 0))/3)
	+((IFNULL(external_1*40/100, 0)+IFNULL(external_2*40/100, 0))/2)) AS Result , students.reg,students.name, students.session FROM result
	INNER JOIN students ON result.student_id = students.id ORDER BY students.id;";


$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>


<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<title>Students Information</title>
	<link rel="stylesheet" href="student.result.css">
</head>

<body>
	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="5">Students Information</th>
		</tr>
		<tr>
			<th>Id</th>
			<th>Registration</th>
			<th>Name</th>
			<th>Session</th>
			<th>Result</th>
		</tr>

		<?php
		if ($resultCheck > 0) {

			while ($row = mysqli_fetch_assoc($result)) {
		?>

				<tr>
					<td><?php echo $row['student_id']?></td>
					<td><?php echo $row['reg']?></td>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['session']?></td>
					<td><?php echo $row['Result']?></td>

				</tr>
			<?php
			}
		}

		?>


	</table>
</body>

</html>