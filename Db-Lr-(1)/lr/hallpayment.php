<?php
include 'inc/header.php';
/*include 'lib/User.php';*/
?>
<?php
    /*$user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    	$usrRegi = $user->userRegistration($_POST);
    }*/
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Hall Payment</h2>
	</div>

    <div class="panel-body">
    	<div style="max-width:600px; margin:0 auto">
<?php
    /*if (isset($usrRegi)) {
    	echo $usrRegi;
    }*/
?>

	    <form action="hallpayment_code.php"method="POST">
	    	<div class="form-group">
	    		<label for="name">Your Name</label>
	    		<input type="text" id="id" name="id" class="form-control"/>
	    	</div>
	    	<div class="row">
	    	<div class="form-group col-5" >
	    		<label for="username">Hall Addmission Serial</label>
	    		<input type="text" id="username" name="username" class="form-control"/>
	    	</div>
	    	<div class="form-group col-3" >
	    		<label for="username">Session</label>
	    		<select class="form-control"><option>2016-2017</option><option>2017-2018</option><option>2018-2019</option></select>
	    	</div>
	    		<div class="form-group col-3">
	    		<label for="payment">Time</label>
	    		<select class="form-control"><option>Jan-June</option><option>July-December</option></select>
	    	    </div>
			</div>

	    	<div class="row">
	    	<div class="form-group col-4">
	    		<label for="establishment">Establishment</label>
	    		<input class="form-control">
	    	</div>
	        <div class="form-group col-2" >
	    		<label for="month">Month</label>
	    		<select class="form-control"><option>6</option><option>12</option></select>
	    	</div>
	    	<div class="form-group col-4" >
	    		<label for="monthpayment">Per Month</label>
	    		<input class="form-control">
	    	</div>
	    	</div>

	    	<div class="form-group">
	    		<label for="trnx">Trxn No</label>
	    		<input type="text" id="trnx" name="trnx" class="form-control"/>
	    	</div>
	    	<button type="submit" name="register" class="btn btn-success">Submit</button>
	    </form>

</div>
</div>
<?php include 'inc/footer.php';?>
    