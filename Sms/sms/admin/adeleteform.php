<?php

include('dbcon.php');
$id=$_REQUEST['sid'];
						
			$qry="DELETE FROM `nstudent` WHERE `id`='$id'";
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Deleted Successfully');
				window.open('admissiondelete.php','_self');
				
				</script>
			<?php	
			
			}

?>
