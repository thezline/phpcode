<?php

/**
 *  User controller
 */

class User_Controller
{
    private $model;

    // Get login route
    function login()
    {
        require_once("./views/registro.php");
    }

    // Get register route
    function register()
    {
        require_once("./views/iniciar.php");
    }
}

