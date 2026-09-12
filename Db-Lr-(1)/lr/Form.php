<?php
include 'inc/header.php';
include 'lib/User.php';
?>
<?php
    /*$user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    	$usrRegi = $user->userRegistration($_POST);
    }*/
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Enrollment Form</h2>
	</div>

    <div class="panel-body">
    	<div style="max-width:600px; margin:0 auto">
<?php
    /*if (isset($usrRegi)) {
    	echo $usrRegi;
    }*/
?>

	    <form action="form_code.php"method="POST">
	    	<div class='alert alert-danger'><strong>Success ! </strong>Submitted !</div>
	    	<div class="form-group">
	    		<label for="name">Your Name</label>
	    		<input type="text" id="id" name="id" class="form-control"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="fathername">Your Father's Name</label>
	    		<input type="text" id="id" name="id" class="form-control"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="mothername">Your Mother's Name</label>
	    		<input type="text" id="username" name="mothersname" class="form-control"/>
	    	</div>
	    	
	    	<div class="form-group">
	    		<label for="email">Contact No</label>
	    		<input type="text" id="number" name="number" class="form-control"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="email">Course Credit</label>
	    		<input type="text" id="email" name="cc" class="form-control"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="email">Course</label>
	    		<input type="text" id="email" name="course" class="form-control"/>
	    	</div>

	    	<div class="form-group">
	    		<label for="trnx">Bank Trxn No</label>
	    		<input type="text" id="trnx" name="trnx" class="form-control"/>
	    	</div>
	    	<button type="submit" name="register" class="btn btn-success">Submit</button>

	    </form>

</div>
</div>
<?php include 'inc/footer.php';?>
    