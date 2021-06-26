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
    public function loginView() {
        require_once("./views/iniciar.php");
    }

    // Get register route
    public function registerView() {
        require_once("./views/registro.php");
    }

    public function userLogin() {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = $this->model->login($email, $password);

        if($result) {
            header("location: " . urlsite);
        } else {
            die("El usuario o contraseña es incorrecto");
        }
    }

    public function close() {
        session_start();
        session_destroy();
        header("location: " . urlsite);
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

    public function editUser() {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $last_name = $_POST["last_name"];

        $this->model->edit($name, $last_name, $id);
        header("location: " . urlsite);
    }
}

