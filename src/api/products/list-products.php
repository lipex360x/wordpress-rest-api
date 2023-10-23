<?php
class ListProducts extends APIFactory {
  function __construct() {
    $this->path = 'api';
    $this->route = 'products';
    $this->post_type = 'products';
    $this->method = WP_REST_Server::READABLE;
    
    add_action('rest_api_init', array($this, 'register'));
  }

  function response($items) {
    $output = array();

    foreach ($items->posts as $item) {
      $product = new Product($item->post_title, $item->value);
      array_push($output, $product);
    }

    return $output;
  }
}

$register = new ListProducts();