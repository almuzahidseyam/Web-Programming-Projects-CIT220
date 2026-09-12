<?php
include 'lib/user.php';
include 'inc/header.php';

?>

<?php
    echo '<script>window.alert("Registration Successful")</script>';
    if (isset($_GET['id'])) {
    	$userid = (int)$_GET['id'];
    }
     $user = new User();

?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Profile <span class="pull-right"><a class="btn btn-primary" href="index2.php">Back</a></span></h2>
	</div>

    <div class="panel-body">
    	<div style="max-width:600px; margin:0 auto">

	    <form action=""method="POST">
	    	<div class="form-group">
	    		<label for="name">Name</label>
	    		<input type="text" id="name" name="name" class="form-control" value="Sagar Halder"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="username">Username
	    		</label>
	    		<input type="text" id="username" name="username" class="form-control" value="<?php echo $_SESSION['username'] ;?>"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="email">Email Address
	    		</label>
	    		<input type="text" id="email" name="email" class="form-control" value="<?php echo $_SESSION['email'] ;?>"/>
	    	</div>
	    	
	    	<button type="submit" name="update" class="btn btn-success">Update</button>
	    </form>
</div>
</div>
<?php include 'inc/footer.php';?>
    