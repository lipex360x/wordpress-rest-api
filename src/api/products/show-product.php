<?php 
class ShowProduct extends APIFactory {
  function __construct() {
    $this->path = 'api';
    $this->route = 'products/(?P<slug>[-\w]+)';
    $this->post_type = 'products';
    $this->method = WP_REST_Server::READABLE;
    
    add_action('rest_api_init', array($this, 'register'));
  }

  function response($items) {
    $data = $items->posts[0];
    $product = new Product($data->post_title, $data->value);
    return $product;
  }
}

$register = new ShowProduct();