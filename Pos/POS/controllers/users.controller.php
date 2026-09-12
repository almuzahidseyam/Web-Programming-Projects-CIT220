<?php

class ControllerUsers{
    public static function ctrLoginUsers(){
        if (isset($_POST["usrEmail"]) && isset($_POST["usrPassword"])){
            if (preg_match('/(?=^.{6,320}$)(?:[a-z0-9!#$%&\'*+]+(?:\.[a-z0-9!#$%&\'*+]+)*|"(?:[--!#-[]-]|\[-	-])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[--!-ZS-]|\[-	-])+)])/',$_POST["usrEmail"])
            && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{8,72}/',$_POST["usrPassword"])){
                $table = "users";
                $item = "email";
                $value = $_POST["usrEmail"];
                $answer = UsersModel::mdlLoginUser($table, $item, $value);
                $blowFish = crypt($_POST["usrPassword"], '$2y$09$WhoWillGuardTheGuards/$');
                if($answer["email"] == $_POST["usrEmail"] && hash_equals($answer["password"], $blowFish)) {
                    if($answer["status"] == 1){
                        $_SESSION["beginSession"] = "ok";
                        $_SESSION["id"] = $answer["id"];
                        $_SESSION["name"] = $answer["name"];
                        $_SESSION["profile"] = $answer["profile"];
                        $_SESSION["photo"] = $answer["photo"];
                        $_SESSION['member_since'] = $answer['member_since'];

                        date_default_timezone_set('Asia/Dhaka');
                        $date = date('Y-m-d');
                        $hour = date('H:i:s');
                        $actualDate = $date.' '.$hour;

                        $item1 = "last_login";
                        $value1 = $actualDate;
                        $item2 = "id";
                        $value2 = $answer["id"];
                        $lastLogin = UsersModel::mdlActivateUser($item1, $value1, $item2, $value2);

                        if ($lastLogin == "ok"){
                            echo '<script>window.location = "";</script>';
                        }
                    } else {
                        echo "<script>
                            let timerInterval;
                            Swal.fire({
                              icon: 'error',
                              title: 'Your access has been revoked!',
                              text: 'Contact the Administrator',
                              timer: 2000,
                              showConfirmButton: false,
                              onClose: () => {
                                clearInterval(timerInterval)
                              }});
                        </script>";
                    }
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Invalid Username or Password!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
                }
            } else{
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Password Must Be At Least 8 Characters!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
            }
        }

    }

    public static function ctrCreateUsers(){
        if (isset($_POST["newEmail"]) && isset($_POST["newName"]) && isset($_POST["newPassword"]) && isset($_POST["newProfile"])){
            if (preg_match('/(?=^.{6,320}$)(?:[a-z0-9!#$%&\'*+]+(?:\.[a-z0-9!#$%&\'*+]+)*|"(?:[--!#-[]-]|\[-	-])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[--!-ZS-]|\[-	-])+)])/',$_POST["newEmail"])
                && preg_match('/^[\p{Ll}\p{Lu}\s.,\'\- ]{2,50}/',$_POST["newName"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{8,72}/',$_POST["newPassword"])){
                $route="";
                $blowFish = crypt($_POST["newPassword"], '$2y$09$WhoWillGuardTheGuards/$');
                if(isset($_FILES["newPhoto"]["tmp_name"]) && $_FILES['newPhoto']['tmp_name']!=""){
                    /*$allowed_ext = array("jpg","jpeg","png","gif","bmp","ico");
                    $ext = end(explode('.', $_FILES['newPhoto']['name']));
                    if (in_array($ext, $allowed_ext)){}
                    $search = strpos($_POST['newEmail'], '@');*/
                    $uName = explode('@', $_POST['newEmail']);
                    $directory = "views/img/users/".$uName[0];
                    mkdir($directory, 0755);
                    /*$rand = mt_rand(1000,9999);*/
                    $new_name= str_replace(' ', '_', $_FILES['newPhoto']['name']);
                    $route = $directory."/".date("Ymd.His_").$new_name;
                    $origin = $_FILES['newPhoto']['tmp_name'];
                    move_uploaded_file($origin, $route);
                }
                $data = array("name"=>$_POST["newName"],"email"=>$_POST["newEmail"],
                              "password"=>$blowFish,"profile"=>$_POST["newProfile"],
                              "photo"=>$route);
                $answer = UsersModel::mdlAddUser($data);
                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'User Added Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'users';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Adding User Failed!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
                }
            }
            else{
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Data Not in Valid Format!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
            }
        }
    }

    public static function ctrShowUsers($item, $value){
        $table = "users";
        return UsersModel::mdlLoginUser($table, $item, $value);
    }

    public static function ctrEditUser(){
        if (isset($_POST["editEmail"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\s.,\'\- ]{2,50}/',$_POST["editName"])){
                $route= $_POST["currentPhoto"];
                $blowFish = $_POST["currentPassword"];
                if(isset($_FILES["editPhoto"]["tmp_name"]) && !empty($_FILES["editPhoto"]["tmp_name"])){
                    $uName = explode('@', $_POST['editEmail']);
                    $directory = "views/img/users/".$uName[0];
                    if (!empty($_POST["currentPhoto"])){
                        unlink($_POST["currentPhoto"]);
                    } else{
                        mkdir($directory, 0755);
                    }
                    $new_name= str_replace(' ', '_', $_FILES['editPhoto']['name']);
                    $route = $directory."/".date("Ymd.His_").$new_name;
                    $origin = $_FILES['editPhoto']['tmp_name'];
                    move_uploaded_file($origin, $route);
                }
                if ($_POST["editPassword"] != ""){
                    if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{8,72}/',$_POST["editPassword"])){
                        $blowFish = crypt($_POST["editPassword"], '$2y$09$WhoWillGuardTheGuards/$');
                    } else{
                        echo "<script>
                            let timerInterval;
                            Swal.fire({
                              icon: 'error',
                              title: 'Password Not in Valid Format!',
                              timer: 2000,
                              showConfirmButton: false,
                              onClose: () => {
                                clearInterval(timerInterval)
                              }});
                        </script>";
                    }
                }
                $data = array("name"=>$_POST["editName"],"email"=>$_POST["editEmail"],
                    "password"=>$blowFish,"profile"=>$_POST["editProfile"],
                    "photo"=>$route);
                $answer = UsersModel::mdlEditUser($data);
                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'User Edited Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'users';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Editing User Failed!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
                }
            }
            else{
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Name Not in Valid Format!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
            }
        }
    }

    public static function ctrDeleteUser(){
        if (isset($_GET["idUser"])){
            $id = $_GET["idUser"];
            if ($_GET["photoUser"] != null && $_GET["photoUser"] != " "){
                unlink($_GET["photoUser"]);
                $uName = explode('@', $_GET["email"]);
                $directory = "views/img/users/".$uName[0];
                rmdir($directory);
            }
            $answer = UsersModel::mdlDeleteUser($id);
            if ($answer == "ok"){
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'User Deleted Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'users';
                            });
                    </script>";
            } else {
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Deleting User Failed!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
            }
        }
    }
}
