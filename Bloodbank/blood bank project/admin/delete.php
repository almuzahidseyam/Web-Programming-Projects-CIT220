<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ||  $_SESSION["role"] !== "admin"){
    header("location: login.php");
    exit;
}
?>

<?php



require_once "./../config.php";


if($_SERVER["REQUEST_METHOD"]  == "GET"){
    if(isset($_GET["id"])){

        $u_id =trim($_GET["id"]);

        $sql = "DELETE FROM `users` WHERE `id` = ?";
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $param_id);

            

            

            $param_id = $u_id;
            

            if($stmt->execute()){


                header("location: ./index.php");

            } else{

                echo "Something went wrong. Please try again later.";

            }         

			

			$stmt->close();
        }
    }

}

$mysqli->close();

?>