<?php
require_once "connection.php";

class CustomersModel{
    /*   Add Customer   */
    public static function mdlAddCustomer($data){
        $stmt = Connection::connect()->prepare("INSERT INTO customers(customer_id, name, email, phone, address, birth_date) VALUES(:customer_id, :name, :email, :phone, :address, :birth_date);");
        $stmt->bindParam(":customer_id", $data["customer_id"], PDO::PARAM_STR);
        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);
        $stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);
        $stmt->bindParam(":birth_date", $data["birth_date"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    /*   Generate New Customer ID  */
    public static function mdlGenerateCustomerID($table){
        $stmt = Connection::connect() -> prepare("SELECT * FROM $table ORDER BY 1 DESC");
        $stmt->execute();
        return $stmt->fetch();
    }
    /*   Show Customer   */
    public static function mdlShowCustomers($table, $item, $value){
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
    /*   Edit Product   */
    public static function mdlEditCustomer($data){
        $stmt = Connection::connect()->prepare("UPDATE customers SET name = :name, email = :email, phone = :phone, address = :address, birth_date = :birth_date WHERE customer_id = :customer_id;");
        $stmt->bindParam(":customer_id", $data["customer_id"], PDO::PARAM_STR);
        $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);
        $stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);
        $stmt->bindParam(":birth_date", $data["birth_date"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }
    /*   Delete Customer   */
    public static function mdlDeleteCustomer($id){
        $stmt = Connection::connect()->prepare("DELETE FROM customers WHERE id = :$id;");
        $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);
        if($stmt->execute()){
            $stmt = Connection::connect()->prepare("SET  @num := 0; UPDATE customers SET id = @num := (@num+1); ALTER TABLE customers AUTO_INCREMENT =1;");
            $stmt->execute();
            return "ok";
        } else{
            return "error";
        }
    }
}
