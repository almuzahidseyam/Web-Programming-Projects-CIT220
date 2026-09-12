<?php
include('dbcon.php');
			
			$name=$_POST['name'];
			$cont=$_POST['cont'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$class=$_POST['class'];
			$sub=$_POST['sub'];
			$designation=$_POST['designation'];
			$salary=$_POST['salary'];
			$id=$_POST['sid'];
			$imagename=$_FILES['img'] ['name'];
			$tempname=$_FILES['img'] ['tmp_name'];
			
			move_uploaded_file($tempname,"../dataimg/$imagename");
			
			
			$qry="UPDATE `teacher` SET `name` = '$name', `cont` = '$cont', `email` = '$email', `address` = '$address', `class` = '$class', `sub` = '$sub', 
			
			`designation` = '$designation', `salary` = '$salary',`image`='$imagename'  WHERE `id` = '$id'";
			
			$run=mysqli_query($con,$qry);
			if($run==true)
			{
				?>
				<script type="text/javascript">alert('Data Updated Successfully');
				window.open('teacherupdate.php?sid=<?php echo $id;?>','_self');
				
				</script>
			<?php	
			
			}

?>