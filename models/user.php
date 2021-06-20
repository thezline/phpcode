<?php

/**
 *   User model
 */

include_once("./db/database.php");

class User_Model extends Connection {
    public $db;

    public function __construct() {
        $this->db = Connection::conn();
    }

    public function save($name, $last_name, $email, $password) {
        $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(name, last_name, email, password) 
            values(:name, :last_name, :email, :password)";

        $sql = $this->db->prepare($query);
        $sql->bindParam(':name', $name, PDO::PARAM_STR, 30);
        $sql->bindParam(':last_name', $last_name, PDO::PARAM_STR, 30);
        $sql->bindParam(':email', $email, PDO::PARAM_STR, 100);
        $sql->bindParam(':password', $passwordEncrypted, PDO::PARAM_STR, 100);

        $sql->execute();
    }
}