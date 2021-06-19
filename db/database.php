<?php
/**
*   Conexión a bbdd usando mysqli
*/

class Connection {
    public static function conn() {
        $db = new mysqli("localhost", "root", "", "tienda");
        return $db;
    }
}