<?php

include('dbcon.php');
$id=$_REQUEST['tid'];
						
			$qry="DELETE FROM `teacher` WHERE `id`='$id'";
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Deleted Successfully');
				window.open('teacherdelete.php','_self');
				
				</script>
			<?php	
			
			}

?>
