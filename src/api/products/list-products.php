<?php
class ListProducts extends APIFactory {
  function __construct() {
    $this->path       = 'api';
    $this->route      = 'products';
    $this->post_type  = 'products';
    $this->method     = WP_REST_Server::READABLE;
    add_action('rest_api_init', array($this, 'register'));
  }

  function response($items) {
    $output = array();
    foreach ($items->posts as $data) {
      $image = get_field('image', $data->ID)['sizes']["medium"];
      $product = new Product($data->ID, $data->post_name, $data->post_title, $data->value, $image);
      array_push($output, $product);
    }
    return $output;
  }
}

$register = new ListProducts();