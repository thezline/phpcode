<?php
/**
*   Modelo producto
*/

require_once("./db/database.php");

class Product extends Connection
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::conn();
    }

    public function get_products()
    {
        $query = "SELECT * FROM products";

        foreach ($this->db->query($query) as $res) {
            $this->products[] = $res;
        }

        return $this->products;
    }
}
