<?php
function information($batch,$id)
{
	$con=mysqli_connect('localhost','root','mysql','agfaculty');

	$sql="SELECT*FROM `stinformation` WHERE `id`=`$id`AND `batch`='$batch'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	{
     
     $data=mysqli_fetch_assoc($run);
     ?>
     <table align="center">
     	<tr>
     		<th colspan="5">details</th>
     	</tr>
     	<td rowspan="7"><img src="dataimg/<?php echo$data['image'];?>"style="max-height: 150px;max-width: 120px;"/></td>
     	<tr>
     		<th>id</th>
     		<td><?php echo $data['id'];?></td>
     	</tr>
     	<tr>
     		<th>batch</th>
     		<td><?php echo $data['batch'];?></td>
     	</tr>
     	<tr>
     		<tr>
     			<th>name</th>
     				<td><?php echo $data['name'];?></td>
     			</tr>
     			<tr>
     			<th>gmail</th>
     				<td><?php echo $data['gmail'];?></td>
     			</tr>
     			<tr>
     			<th>phnno</th>
     				<td><?php echo $data['phnno'];?></td>
     			</tr>
     			<tr>
     			<th>address</th>
     				<td><?php echo $data['address'];?></td>
     			</tr>
     			<tr>
     			<th>hall</th>
     				<td><?php echo $data['hall'];?></td>
     			</tr>
     		</tr>
     	</table>
     	<?php
     
     
 }
     else
     {
   
     




   echo "<script>alert('No student found');</script>";










}


}
?>
	
