<?php





if (isset($_POST['search']))
{
	$id = $_POST['id1'];
	$connect = mysqli_connect("localhost", "root", "", "db_lr");
	$query = "SELECT `id`, `name`, `username`, `email`, `password` FROM `tbl_user` WHERE `id`= $id LIMIT 1";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
	while ($row = mysqli_fetch_array($result))
	{
		$id2 = $row['id'];
		$username = $row['username'];
        $email = $row['email'];
	}
    } else {
    	echo "Undefined ID";
    	$username = "";
        $email = "";
    }

	mysqli_free_result($result);
    mysqli_close ($connect);
}else{
	$username = "";
    $email = "";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Find Data</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<form action="" method="post">
	Id:<input type="text" value="<?php echo $id2;?>" name="id1"><br><br>
	Username:<input type="text" name="username" value="<?php echo $username;?>"><br><br>
	Email:<input type="text" name="email" value="<?php echo $email;?>"><br><br>
	<input type="submit" name="search" value="Find">
</form>
