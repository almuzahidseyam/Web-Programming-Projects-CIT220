<?php
require_once "connection.php";

class CategoriesModel{
    public static function mdlAddCategory($data){
        $stmt = Connection::connect()->prepare("INSERT INTO categories(category) VALUES(:category);");
        $stmt->bindParam(":category", $data, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    public static function mdlShowCategories($item, $value){
        if($item != null){
            $stmt = Connection::connect() -> prepare("SELECT * FROM categories WHERE $item = :$item");
            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else{
            $stmt = Connection::connect() -> prepare("SELECT * FROM categories");
            $stmt->execute();
            return $stmt->fetchAll();
        }

    }
    public static function mdlEditCategory($data){
        $stmt = Connection::connect()->prepare("UPDATE categories SET category = :category WHERE id = :id;");
        $stmt->bindParam(":category", $data["category"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    public static function mdlDeleteCategory($id){
        $stmt = Connection::connect()->prepare("DELETE FROM categories WHERE id = :$id;");
        $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);
        if($stmt->execute()){
            /*$stmt = Connection::connect()->prepare("SET  @num := 0; UPDATE categories SET id = @num := (@num+1); ALTER TABLE categories AUTO_INCREMENT =1;");
            $stmt->execute();*/
            return "ok";
        } else{
            return "error";
        }
    }
}