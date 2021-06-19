<?php
/**
*   Connection to MySQL using mysqli
*/

class Connection {
    public static function conn() {
        $db = new mysqli("localhost", "root", "", "tienda");
        return $db;
    }
}