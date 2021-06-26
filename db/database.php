<?php

/**
*   Connection to MySQL using mysqli
*/

class Connection {
    protected static function conn() {
        $db = new mysqli("localhost", "root", "", "tienda");

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
        return $db;
    }
}