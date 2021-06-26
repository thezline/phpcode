<?php

/**
 *   User model
 */

require_once("./db/database.php");

class User_Model extends Connection {
    private $db;

    public function __construct() {
        $this->db = Connection::conn();
    }

    public function save($name, $last_name, $email, $password) {
        $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name, last_name, email, pass, createdAt) 
            values (:name, :last_name, :email, :pass, :createdAt)";

        $sql = $this->db->prepare($query);

        $sql->bind_param(":name", $name);
        $sql->bind_param(":last_name", $last_name);
        $sql->bind_param(":email", $email);
        $sql->bind_param(":pass", $passwordEncrypted);
        $sql->bind_param(":createdAt", date("Y-m-d"));

        $sql->execute();
    }
}