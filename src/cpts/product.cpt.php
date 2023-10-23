<?php
class ProductCPT extends CPTFactory {
  function __construct() {
    $this->slug = 'products';
    $this->singularName = 'Produto';
    $this->pluralName = 'Produtos';
    $this->menuIcon = 'dashicons-hourglass';
    parent::create();
  }
}
$register = new ProductCPT();
