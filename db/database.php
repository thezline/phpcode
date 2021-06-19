<?php
/**
*   Conexión a bbdd usando mysqli
*/

class Connect{
    public static function connection() {
        $db = new mysqli("localhost", "root", "", "tienda");
        return $db;
    }
}