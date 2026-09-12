<?php
require_once "../controllers/users.controller.php";
require_once "../models/users.model.php";
class AjaxUsers{
    public $idUser;
    public function ajaxEditUser(){
        $item = "id";
        $value = $this->idUser;
        $answer = ControllerUsers::ctrShowUsers($item, $value);
        echo json_encode($answer);
    }
    public $activateId;
    public $activateUser;
    public function ajaxActivateUser(){
        $item1 = "status";
        $value1 = $this->activateUser;
        $item2 = "id";
        $value2 = $this->activateId;
        $response = UsersModel::mdlActivateUser($item1, $value1, $item2, $value2);
    }
    public $validateEmail;
    public function ajaxValidateUser(){
        $item = "email";
        $value = $this->validateEmail;
        $answer = ControllerUsers::ctrShowUsers($item, $value);
        echo json_encode($answer);
    }

}
if (isset($_POST["idUser"])){
    $edit= new AjaxUsers;
    $edit->idUser = $_POST["idUser"];
    $edit->ajaxEditUser();
}
if (isset($_POST["activateUser"])){
    $activateUser = new AjaxUsers;
    $activateUser->activateUser = $_POST["activateUser"];
    $activateUser->activateId = $_POST["activateId"];
    $activateUser->ajaxActivateUser();
}
if (isset($_POST["validateEmail"])){
    $validateUser = new AjaxUsers;
    $validateUser->validateEmail = $_POST["validateEmail"];
    $validateUser->ajaxValidateUser();
}
