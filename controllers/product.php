<?php

/**
 *  Product controller
 */

require_once("./models/product.php");

class Product_Controller
{
  private $model;

  function __construct()
  {
    $this->model = new Product_Model();
  }

  // Get all the products
  function index()
  {
    $datos = $this->model->get_products();
    require_once("./views/index.php");
  }
}
