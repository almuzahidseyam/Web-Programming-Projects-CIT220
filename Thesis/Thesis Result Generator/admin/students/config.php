<?php
$connection = new mysqli("localhost", "root", "", "thesis");
if (!$connection) {
    die("Error in connection" . $connection->connect_error);
}
