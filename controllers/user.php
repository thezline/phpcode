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
    function login() {
        require_once("./views/registro.php");
    }

    // Get register route
    function register() {
        require_once("./views/iniciar.php");
    }

    function saveNewUser() {
        $name = $_REQUEST["name"];
        $last_name = $_REQUEST["last_name"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];

        $result = $this->model->save($name, $last_name, $email, $password);

        header("location: " . urlsite);
    }
}

