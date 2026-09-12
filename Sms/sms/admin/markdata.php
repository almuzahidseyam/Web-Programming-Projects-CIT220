<?php
include('dbcon.php');
			
			$rollno=$_POST['rollno'];
			$name=$_POST['name'];
			$class=$_POST['class'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$pcont=$_POST['pcont'];
			$address=$_POST['address'];
			$religion=$_POST['religion'];
			$date=$_POST['date'];
			$marks=$_POST['marks'];
			$result=$_POST['result'];
			$year=$_POST['year'];
			$id=$_POST['sid'];
			$imagename=$_FILES['img'] ['name'];
			$tempname=$_FILES['img'] ['tmp_name'];
			
			move_uploaded_file($tempname,"../dataimg/$imagename");
			
			$qry="INSERT INTO `student`(`rollno`, `class`, `name`, `fname`, `mname`, `pcont`, `address`, `religion`, `date`,`marks`, `result`, `year`,`image`) 
			VALUES ('$rollno','$class','$name','$fname','$mname','$pcont','$address','$religion','$date','$marks','$result','$year','$imagename')";
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Inserted Successfully');
				window.open('markform.php?sid=<?php echo $id;?>','_self');
				
				</script>
			<?php	
			
			}

?>