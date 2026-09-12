<?php
    /*$filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/Session.php';
    Session::init();*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>PSTU Enrollment System </title>
	<link rel="stylesheet" href="inc/bootstrap.min.css"/>
	<script src="inc/jquery.min.js"></script>
	<script src="inc/bootstrap.min.js"></script>
</head>
<?php
    session_start();
    if (isset($_GET['action']) && $_GET['action'] =="logout") {
        session_destroy();

        echo '<script>window.location = "login.php";</script>';
    }

?>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="../lib/hallslip.php">PSTU Enrollment System </a>
				</div>
				<ul class="nav navbar-nav pull-right">
					
					<?php
					    /*$id = Session::get("id");
					    $userlogin = Session::get("login");
					    if ($userlogin == true) {*/
                    if (!isset($_SESSION['beginSession'])){
					?>
					<li><a href="login.php">Login</a></li>
				    
					<li><a href="login/register.php">Register</a></li>
					
					
				    <?php }else{ ?>
				    
				    <li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				    <li><a href="profile.php?id=<?php echo $id; ?>">Profile</a></li>
					<li><a href="?action=logout">Logout</a></li>

					<?php } ?>
				</ul>
			</div>
		</nav>