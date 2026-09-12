<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";
require_once "../controllers/categories.controller.php";
require_once "../models/categories.model.php";

class AjaxProducts{
    /*   Generate New Product Code   */
    public $idCategory;
    public function ajaxCreateProductCode(){
        $item = "category_id";
        $value = $this->idCategory;
        $response = ControllerProducts::ctrShowProducts($item, $value);
        echo json_encode($response);
    }
    /*   Edit Product   */
    public $idProduct;
    public function ajaxEditProduct(){
        $item = "id";
        $value = $this->idProduct;
        $response = ControllerProducts::ctrShowProducts($item, $value);
        echo json_encode($response);
    }
}

/*   Generate New Product Code   */
if (isset($_POST["idCategory"])){
    $productCode = new AjaxProducts();
    $productCode -> idCategory = $_POST["idCategory"];
    $productCode -> ajaxCreateProductCode();
}
/*   Edit Product   */
if (isset($_POST["idProduct"])){
    $editProduct = new AjaxProducts();
    $editProduct -> idProduct = $_POST["idProduct"];
    $editProduct -> ajaxEditProduct();
}