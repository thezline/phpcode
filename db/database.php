<?php

/**
*   Connection to MySQL using mysqli
*/

class Connection {
    protected static function conn() {
        try {
            $db = new mysqli(server, user, password, database);
            return $db;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}