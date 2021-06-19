<?php
include_once("./controllers/product.php");
include_once("./controllers/user.php");

$product = new Product_Controller();
$user = new User_Controller();

if (!empty($_REQUEST['m'])) {
    $method = $_REQUEST['m'];

    if (method_exists($product, $method)) {
        $product->$method();
    } else if (method_exists($user, $method)) {
        $user->$method();
    } else {
        $product->index();
    }
} else {
    $product->index();
}



