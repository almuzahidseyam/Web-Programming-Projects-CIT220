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
		<h2>Bank Payment</h2>
	</div>

    <div class="panel-body">
    	<div style="max-width:600px; margin:0 auto">
<?php
    /*if (isset($usrRegi)) {
    	echo $usrRegi;
    }*/
?>

	    <form action="bank_code.php"method="POST">
	    	<div class="form-group">
	    	<div class="row">
	    	<div class="form-group col-5" >
	    		<label for="name">Name</label>
	    		<input type="text" id="username" name="name" class="form-control"/>
	    	</div>
	    	<div class="form-group col-4" >
	    		<label for="username">ID</label>
	    		<input type="text" id="username" name="id" class="form-control"/>
	    	</div>
	    	<div class="form-group col-3">
	    		<label for="reg">Reg No
	    		</label>
	    		<input type="text" id="email" name="reg" class="form-control"/>
	    	</div>
	    </div>

	    	<div class="row">
	    	<div class="form-group col-4" >
	    		<label for="session">Session</label>
	    		<select class="form-control"><option>2016-2017</option><option>2017-2018</option><option>2018-2019</option></select>
	    	</div>
	    	<div class="form-group col-4">
	    		<label for="faculty">Faculty
	    		</label>
	    		<input type="text" id="email" name="faculty" class="form-control"/>
	    	</div>
	    	<div class="form-group col-4">
	    		<label for="semester">Semester</label>
	    		<select class="form-control"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
	    		</select>
	    	</div>
	    </div>

	    	<div class="row">
	    	<div class="form-group col-6">
	    		<label for="faculty">Admission Fee</label>
	    		<input type="text" id="email" name="admissionfee" class="form-control"/>
	    	</div>
	    	<div class="form-group col-6">
	    		<label for="faculty">Enrollment Fee</label>
	    		<select class="form-control"><option>Regular</option><option>Irregular</option></select>
	    	</div>
	        </div>

	        <div class="row">
	        <div class="form-group col-6">
	    	    <label for="fee">Fee</label>
	    		<select class="form-control"><option>Course Fee</option><option>F.Removal</option></select>
	    	</div>
	    	<div class="form-group col-6">
	    		<label for="gfee">Generator Fee</label>
	    		<input type="text" id="email" name="email" class="form-control"/>
	    	</div>
	        </div>

	        <div class="row">
	        <div class="form-group col-6">
	    	    <label for="cfee">Course Fee</label>
	    		<select class="form-control"><option>Reguler</option><option>Repeat</option></select>
	    	</div>
	    	<div class="form-group col-6">
	    		<label for="fee">Readdmission</label>
	    		<input type="text" id="email" name="email" class="form-control"/>
	    	</div>
	        </div>

	    	<div class="form-group">
	    		<label for="trnx">Trxn No
	    		</label>
	    		<input type="text" id="trnx" name="trnx" class="form-control"/>
	    	</div>
	    	<button type="submit" name="register" class="btn btn-success">Submit</button>
	    </form>

</div>
</div>
<?php include 'inc/footer.php';?>
    