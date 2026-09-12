<?php
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";
require_once "../controllers/categories.controller.php";
require_once "../models/categories.model.php";

class ProductsTable{
    /*   Show Products Table   */
    public static function showProductsTable(){
        $item = null;
        $value = null;
        $products = ControllerProducts::ctrShowProducts($item, $value);
        $jsonData = '{
                      "data": [';
        for ($i = 0; $i < count($products); $i++){
            /*   Image   */
            if ($products[$i]['image'] != ""){
                $image =  "<img src='".$products[$i]['image']."' height='60pt' width='60pt' class='img-thumbnail' alt='".$products[$i]['description']."'>";
            } else{
                $defaultPrdImg = "views/img/products/default/anonymous.png";
                $image =  "<img src='".$defaultPrdImg."' height='60pt' width='60pt' class='img-thumbnail' alt='Product Image'>";
            }
            /*   Categories   */
            $item = "id";
            $val = $products[$i]['category_id'];
            $category = ControllerCategories::ctrShowCategories($item, $val);
            /*   Stock   */
            if ($products[$i]['stock']>10){
                $stock = "<button class='btn btn-success col-12'>".$products[$i]['stock']."</button>";
            } else if ($products[$i]['stock']>0){
                $stock = "<button class='btn btn-warning col-12'>".$products[$i]['stock']."</button>";
            } else {
                $stock = "<button class='btn btn-danger col-12'>".$products[$i]['stock']."</button>";
            }
            /*   Buttons   */
            $buttons = "<div class='row'><div class='btn-group col-12'><button class='btn btn-warning btnEditProduct' idProduct='".$products[$i]['id']."' data-toggle='modal' data-target='#modalEditProduct'><i class='nav-icon fas fa-pen-alt' style='width: .9em;'></i></button><button class='btn btn-danger btnDeleteProduct' idProduct='".$products[$i]['id']."' imageProduct='".$products[$i]['image']."'><i class='nav-icon fas fa-times-circle' style='width: .9em;'></i></button></div></div>";
            $jsonData .= '[
                          "'.($i+1).'",
                          "'.$image.'",
                          "'.$products[$i]['code'].'",
                          "'.$products[$i]['description'].'",
                          "'.$category['category'].'",
                          "'.$stock.'",
                          "'.$products[$i]['buying_price'].'",
                          "'.$products[$i]['selling_price'].'",
                          "'.$products[$i]['date'].'",
                          "'.$buttons.'"
                      ],';
        }
        $jsonData = substr($jsonData, 0, -1);
        $jsonData .= ']
                    }';
        echo $jsonData;
    }
}

/*   Activate Products Table   */
$activateProducts = new ProductsTable();
$activateProducts -> showProductsTable();
