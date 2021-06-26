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
        $date = date("Y-m-d");

        $query = "INSERT INTO users (name, last_name, email, pass, createdAt) 
                values (?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sssss", $name, $last_name, $email, $passwordEncrypted, $date);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM users WHERE id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $id);
        return $stmt->execute();
    }
}
