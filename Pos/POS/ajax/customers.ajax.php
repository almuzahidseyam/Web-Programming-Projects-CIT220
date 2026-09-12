<?php
require_once "../controllers/customers.controller.php";
require_once "../models/customers.model.php";
class AjaxCustomers{
    public $idCustomer;
    public function ajaxEditCustomer(){
        $item = "id";
        $value = $this->idCustomer;
        $answer = ControllerCustomers::ctrShowCustomers($item, $value);
        echo json_encode($answer);
    }
}
if (isset($_POST["idCustomer"])){
    $customer= new AjaxCustomers;
    $customer->idCustomer = $_POST["idCustomer"];
    $customer->ajaxEditCustomer();
}
