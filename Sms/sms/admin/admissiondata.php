<?php
include('dbcon.php');
			
			$name=$_POST['name'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$class=$_POST['class'];
			$pcont=$_POST['pcont'];
			$address=$_POST['address'];
			$date=$_POST['date'];
			$marks=$_POST['marks'];
			$year=$_POST['year'];
			$id=$_POST['sid'];
			
			$qry="UPDATE `nstudent` SET  `name` = '$name', `fname` = '$fname', `mname` = '$mname',`class` = '$class', `pcont` = '$pcont', `address` = '$address',
			`date` = '$date',`marks`='$marks',`year`='$year'WHERE `nstudent`.`id` = '$id'";
			
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Updated Successfully');
				window.open('admissionupdate.php?sid=<?php echo $id;?>','_self');
				
				</script>
			<?php	
			
			}

?>