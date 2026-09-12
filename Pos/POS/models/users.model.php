<?php
require_once "connection.php";

class UsersModel{
    public static function mdlLoginUser($table, $item, $value){
        if($item != null){
            $stmt = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else{
            $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }

    }
    public static function mdlAddUser($data){
        $stmt = Connection::connect()->prepare("INSERT INTO users(name, email, password, profile, photo) VALUES(:name, :email, :password, :profile, :photo);");
        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $stmt->bindParam(":profile", $data["profile"], PDO::PARAM_STR);
        $stmt->bindParam(":photo", $data["photo"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    public static function mdlEditUser($data){
        $stmt = Connection::connect()->prepare("UPDATE users SET name = :name, password = :password, profile = :profile, photo = :photo WHERE email = :email;");
        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
        $stmt->bindParam(":profile", $data["profile"], PDO::PARAM_STR);
        $stmt->bindParam(":photo", $data["photo"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    public static function mdlActivateUser($item1, $value1, $item2, $value2){
        $stmt = Connection::connect()->prepare("UPDATE users SET $item1 = :$item1 WHERE $item2 = :$item2;");
        $stmt->bindParam(":".$item1, $value1, PDO::PARAM_STR);
        $stmt->bindParam(":".$item2, $value2, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    public static function mdlDeleteUser($id){
        $stmt = Connection::connect()->prepare("DELETE FROM users WHERE id = :$id;");
        $stmt->bindParam(":".$id, $id, PDO::PARAM_STR);
        if($stmt->execute()){
            $stmt = Connection::connect()->prepare("SET  @num := 0; UPDATE users SET id = @num := (@num+1); ALTER TABLE users AUTO_INCREMENT =1;");
            $stmt->execute();
            return "ok";
        } else{
            return "error";
        }
    }
}