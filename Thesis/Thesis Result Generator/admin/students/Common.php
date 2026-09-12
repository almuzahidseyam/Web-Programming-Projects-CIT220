<?php


class Common
{
  public function uploadData($connection, $id, $reg, $name, $session)
  {
    $mainQuery = "INSERT INTO  students SET id='$id',reg='$reg',name='$name', session = '$session'";
    $result1 = $connection->query($mainQuery) or die("Error in main Query" . $connection->error);
    return $result1;
  }
}
