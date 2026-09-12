<?php
require_once "connection.php";

class ProductsModel{
    /*   Show Products   */
    public static function mdlShowProducts($table, $item, $value){
        if($item != null){
            $stmt = Connection::connect() -> prepare("SELECT * FROM products WHERE $item = :$item ORDER BY id DESC");
            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else{
            $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
    /*   Add Product   */
    public static function mdlAddProduct($data){
        $stmt = Connection::connect()->prepare("INSERT INTO products(category_id, code, description, image, stock, buying_price, selling_price) VALUES(:category_id, :code, :description, :image, :stock, :buying_price, :selling_price);");
        $stmt->bindParam(":category_id", $data["category_id"], PDO::PARAM_INT);
        $stmt->bindParam(":code", $data["code"], PDO::PARAM_STR);
        $stmt->bindParam(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindParam(":image", $data["image"], PDO::PARAM_STR);
        $stmt->bindParam(":stock", $data["stock"], PDO::PARAM_STR);
        $stmt->bindParam(":buying_price", $data["buying_price"], PDO::PARAM_STR);
        $stmt->bindParam(":selling_price", $data["selling_price"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    /*   Edit Product   */
    public static function mdlEditProduct($data){
        $stmt = Connection::connect()->prepare("UPDATE products SET category_id = :category_id, description = :description, image = :image, stock = :stock, buying_price = :buying_price, selling_price = :selling_price WHERE code = :code;");
        $stmt->bindParam(":category_id", $data["category_id"], PDO::PARAM_INT);
        $stmt->bindParam(":code", $data["code"], PDO::PARAM_STR);
        $stmt->bindParam(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindParam(":image", $data["image"], PDO::PARAM_STR);
        $stmt->bindParam(":stock", $data["stock"], PDO::PARAM_STR);
        $stmt->bindParam(":buying_price", $data["buying_price"], PDO::PARAM_STR);
        $stmt->bindParam(":selling_price", $data["selling_price"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    /*   Delete Product   */
    public static function mdlDeleteProduct($id){
        $stmt = Connection::connect()->prepare("DELETE FROM products WHERE id = :$id;");
        $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);
        if($stmt->execute()){
            $stmt = Connection::connect()->prepare("SET  @num := 0; UPDATE products SET id = @num := (@num+1); ALTER TABLE products AUTO_INCREMENT =1;");
            $stmt->execute();
            return "ok";
        } else{
            return "error";
        }
    }
}
