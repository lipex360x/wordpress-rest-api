<?php
class ProductCPT extends CPTFactory {
  function __construct() {
    $this->post_type    = 'products';
    $this->singularName = 'Produto';
    $this->pluralName   = 'Produtos';
    $this->menuIcon     = 'dashicons-hourglass';
    parent::register();
  }
}
$register = new ProductCPT();
