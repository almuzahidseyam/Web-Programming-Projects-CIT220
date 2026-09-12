<?php

class ControllerCategories{
    public static function ctrCreateCategory(){
        if(isset($_POST["newCategory"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/',$_POST["newCategory"])){
                $data = $_POST["newCategory"];
                $answer = CategoriesModel::mdlAddCategory($data);

                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Category Added Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'categories';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Adding Category Failed!',
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
                          title: 'Category Not in Valid Format!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
            }
        }
    }
    public static function ctrShowCategories($item, $value){
        return CategoriesModel::mdlShowCategories($item, $value);
    }

    public static function ctrEditCategory(){
        if (isset($_POST["editCategory"])){
            if (preg_match('/^[\p{Ll}\p{Lu}\d\s.,<>:$@!%*?&#£€\'\- ]{1,70}/',$_POST["editCategory"])){
                $data = array("category"=>$_POST["editCategory"], "id"=>$_POST["idCategory"]);
                $answer = CategoriesModel::mdlEditCategory($data);

                if($answer == "ok"){
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Category Edited Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'categories';
                            });
                    </script>";
                } else{
                    echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Editing Category Failed!',
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
                          title: 'Category Not in Valid Format!',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }});
                    </script>";
            }
        }
    }
    public static function ctrDeleteCategory(){
        if (isset($_GET["idCategory"])){
            $id = $_GET["idCategory"];
            $answer = CategoriesModel::mdlDeleteCategory($id);

            if ($answer == "ok"){
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'success',
                          title: 'Category Deleted Successfully',
                          timer: 2000,
                          showConfirmButton: false,
                          onClose: () => {
                            clearInterval(timerInterval)
                          }}).then(function () {
                                    window.location = 'categories';
                            });
                    </script>";
            } else {
                echo "<script>
                        let timerInterval;
                        Swal.fire({
                          icon: 'error',
                          title: 'Deleting Category Failed!',
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