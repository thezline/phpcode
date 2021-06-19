<?php
include_once("./controllers/product.php");
$product = new Product_Controller();
$product->index();
require_once("./views/index.php");
