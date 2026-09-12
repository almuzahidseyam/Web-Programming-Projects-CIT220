<?php

class ControllerProducts{
    /*   Show Products   */
    public static function ctrShowProducts($item, $value){
        $table = "products";
        return ProductsModel::mdlShowProducts($table, $item, $value);
    }
    /*   Add Product   */
    public static function ctrCreateProduct(){
        if(isset($_POST["newDescription"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,128}/',$_POST["newCode"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,200}/',$_POST["newDescription"])
                && preg_match('/^[0-9.]+$/',$_POST["newStock"])
                && preg_match('/^[0-9.]+$/',$_POST["newBuyingPrice"]) && preg_match('/^[0-9.]+$/',$_POST["newSellingPrice"])){
                $route = "";
                if(isset($_FILES["newImage"]["tmp_name"]) && $_FILES['newImage']['tmp_name']!=""){
                    $directory = "views/img/products/".$_POST["newCategory"];
                    mkdir($directory, 0755);
                    $directory = "views/img/products/".$_POST["newCategory"]."/".$_POST["newCode"];
                    mkdir($directory, 0755);
                    $new_name= str_replace(' ', '_', $_FILES['newImage']['name']);
                    $route = $directory."/".date("Ymd.His_").$new_name;
                    $origin = $_FILES['newImage']['tmp_name'];
                    move_uploaded_file($origin, $route);
                }
                $data = array  ("category_id" => $_POST["newCategory"], "code" => $_POST["newCode"],
                                "description" => $_POST["newDescription"], "stock" => $_POST["newStock"],
                                "buying_price" => $_POST["newBuyingPrice"], "selling_price" => $_POST["newSellingPrice"],
                                "image" => $route);
                $answer = ProductsModel::mdlAddProduct($data);

                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Product Added Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'products';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Adding Product Failed!',
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

    /*   Edit Product   */
    public static function ctrEditProduct(){
        if (isset($_POST["editDescription"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,128}/',$_POST["editCode"])
                && preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,200}/',$_POST["editDescription"])
                && preg_match('/^[0-9.]+$/',$_POST["editStock"])
                && preg_match('/^[0-9.]+$/',$_POST["editBuyingPrice"]) && preg_match('/^[0-9.]+$/',$_POST["editSellingPrice"])){
                $route= $_POST["currentImage"];
                if(isset($_FILES["editImage"]["tmp_name"]) && !empty($_FILES["editImage"]["tmp_name"]) && $_POST["currentImage"] != "views/img/products/default/anonymous.png"){
                    $directory = "views/img/products/".$_POST["editCategory"]."/".$_POST["editCode"];
                    if (!empty($_POST["currentImage"])){
                        unlink($_POST["currentImage"]);
                    } else{
                        $directory = "views/img/products/".$_POST["editCategory"];
                        mkdir($directory, 0755);
                        $directory = "views/img/products/".$_POST["editCategory"]."/".$_POST["editCode"];
                        mkdir($directory, 0755);
                    }
                    $new_name= str_replace(' ', '_', $_FILES['editImage']['name']);
                    $route = $directory."/".date("Ymd.His_").$new_name;
                    $origin = $_FILES['editImage']['tmp_name'];
                    move_uploaded_file($origin, $route);
                }
                $data = array  ("category_id" => $_POST["editCategory"], "code" => $_POST["editCode"],
                    "description" => $_POST["editDescription"], "stock" => $_POST["editStock"],
                    "buying_price" => $_POST["editBuyingPrice"], "selling_price" => $_POST["editSellingPrice"],
                    "image" => $route);
                $answer = ProductsModel::mdlEditProduct($data);
                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Product Edited Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'products';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Editing Product Failed!',
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

    /*   Delete Product   */
    public static function ctrDeleteProduct(){
        if (isset($_GET["idProduct"])){
            $id = $_GET["idProduct"];
            $answer = ProductsModel::mdlDeleteProduct($id);

            if ($answer == "ok"){
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Product Deleted Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'products';
                            });
                    </script>";
            } else {
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Deleting Product Failed!',
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