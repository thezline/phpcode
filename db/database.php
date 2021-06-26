<?php

/**
*   Connection to MySQL using mysqli
*/

class Connection {
    protected static function conn() {
        try {
            $db = new mysqli("localhost", "root", "", "tienda");
            return $db;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}