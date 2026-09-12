<?php

class ControllerCustomers{
    /*   Add Customer   */
    public static function ctrCreateCustomer(){
        if(isset($_POST["newCustomer"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/', $_POST["newCustomer"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/', $_POST["newCustomerID"])
                && preg_match('/(?=^.{6,320}$)(?:[a-z0-9!#$%&\'*+]+(?:\.[a-z0-9!#$%&\'*+]+)*|"(?:[--!#-[]-]|\[-	-])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[--!-ZS-]|\[-	-])+)])/', $_POST["newCustomerEmail"])
                && preg_match('/^[-0-9#*_() ]{1,70}/', $_POST["newPhone"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/', $_POST["newAddress"])){

                $dobArr = explode('/', $_POST['newDOB']);
                $dob = $dobArr[2]."-".$dobArr[1]."-".$dobArr[0];
                /*$phone= str_replace('(+880) ', '0', $_POST["newPhone"]);
                $phone= str_replace('-', '', $phone);*/
                $data = array("customer_id" => $_POST["newCustomerID"], "name" => $_POST["newCustomer"],
                            "email" => $_POST["newCustomerEmail"], "phone" => $_POST["newPhone"],
                            "address" => $_POST["newAddress"], "birth_date" => $dob);
                $answer = CustomersModel::mdlAddCustomer($data);

                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Customer Added Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'customers';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Adding Customer Failed!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
                }
            } else {
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
    /*   Generate New Customer ID   */
    public static function ctrGenerateCustomerID(){
        $table ="customers";
        return CustomersModel::mdlGenerateCustomerID($table);
    }

    /*   Show Customer   */
    public static function ctrShowCustomers($item, $value){
        $table ="customers";
        return CustomersModel::mdlShowCustomers($table, $item, $value);
    }

    /*   Edit Customer   */
    public static function ctrEditCustomer(){
        if (isset($_POST["editCustomer"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/', $_POST["editCustomer"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/', $_POST["editCustomerID"])
                && preg_match('/(?=^.{6,320}$)(?:[a-z0-9!#$%&\'*+]+(?:\.[a-z0-9!#$%&\'*+]+)*|"(?:[--!#-[]-]|\[-	-])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[--!-ZS-]|\[-	-])+)])/', $_POST["editCustomerEmail"])
                && preg_match('/^[-0-9#*_() ]{1,70}/', $_POST["editPhone"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/', $_POST["editAddress"])){

                $dobArr = explode('/', $_POST['editDOB']);
                $dob = $dobArr[2]."-".$dobArr[1]."-".$dobArr[0];
                $data = array("customer_id" => $_POST["editCustomerID"], "name" => $_POST["editCustomer"],
                    "email" => $_POST["editCustomerEmail"], "phone" => $_POST["editPhone"],
                    "address" => $_POST["editAddress"], "birth_date" => $dob);
                $answer = CustomersModel::mdlEditCustomer($data);
                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Customer Edited Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'customers';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Editing Customer Failed!',
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

    /*   Delete Customer   */
    public static function ctrDeleteCustomer(){
        if (isset($_GET["idCustomer"])){
            $id = $_GET["idCustomer"];
            $answer = CustomersModel::mdlDeleteCustomer($id);

            if ($answer == "ok"){
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Customer Deleted Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'customers';
                            });
                    </script>";
            } else {
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Deleting Customer Failed!',
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
