<?php
require_once('connection.php');

$trnx = $id = '';

$trnx = $_POST['trnx'];

$sql = "SELECT * FROM trnx WHERE trnx='$trnx' AND student_id=''";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row["id"];
        $student_id = $_SESSION['id'];

        $sql = "UPDATE trnx SET student_id = '$student_id' WHERE id = '$id';";
        $answer = mysqli_query($conn, $sql);
        if($answer)
        {
            header("Location: Form.php");
        }
        else
        {
            echo "Error :".$sql;
        }
    }/*
    header("Location: ../hallpayment.php");*/
}
else
{
    echo "Transaction ID not matched";
}