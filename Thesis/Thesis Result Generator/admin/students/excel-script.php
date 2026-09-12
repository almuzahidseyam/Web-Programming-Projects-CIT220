<?php
include  "config.php";
include_once  "Common.php";

if ($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue;
            }
            $id = $connection->real_escape_string($data[0]);
            $reg = $connection->real_escape_string($data[1]);
            $name = $connection->real_escape_string($data[2]);
            $session = $connection->real_escape_string($data[3]);
            $common = new Common();
            $SheetUpload = $common->uploadData($connection, $id, $reg, $name, $session);
        }
        if ($SheetUpload) {
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='student.insert.php';</script>";
        }
    }
}
