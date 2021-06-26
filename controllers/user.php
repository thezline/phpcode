<?php

/**
 *  User controller
 */

require_once("./models/user.php");

class User_Controller
{
    private $model;

    function __construct() {
        $this->model = new User_Model();
    }
    
    // Get login route
    public function login() {
        require_once("./views/registro.php");
    }

    // Get register route
    public function register() {
        require_once("./views/iniciar.php");
    }

    public function saveNewUser() {
        $name = $_POST["name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $this->model->save($name, $last_name, $email, $password);
        header("location: " . urlsite);
    }

    public function deleteUser() {
        $id = $_POST["id"];

        $this->model->delete($id);
        header("location: " . urlsite);
    }
}

