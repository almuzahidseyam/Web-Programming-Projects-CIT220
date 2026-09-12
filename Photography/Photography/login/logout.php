<!--
Into this file, we write a code for logout.
-->
<?php
session_destroy();
header("Location: login.php");
?>