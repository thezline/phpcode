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

    public function login($email, $password) {
        $query = "SELECT name, email, pass FROM users WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $stmt->bind_result($name_db, $email_db, $pass_db);

        while ($stmt->fetch()) {
            if(password_verify($password, $pass_db)) {
                session_start();
                $_SESSION['name'] = $name_db;
                $_SESSION['email'] = $email_db;

                return true;
            } else {
                return false;
            }
        }
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

    public function edit($name, $last_name, $id) {
        $query = "UPDATE users SET name = ?, last_name = ? WHERE id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sss", $name, $last_name, $id);
        return $stmt->execute();
    }
}
