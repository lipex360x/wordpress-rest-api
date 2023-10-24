<?php 
class ShowHero extends APIFactory {
  function __construct() {
    $this->path       = 'api';
    $this->route      = 'fixed-text/home-page';
    $this->post_type  = 'fixed-text';
    $this->method     = WP_REST_Server::READABLE;
    add_action('rest_api_init', array($this, 'register'));
  }

  function response($items) {
    $data = $items->posts[0];
    $image = get_field('hero-image', $data->ID)['sizes']["large"];
    return new Hero($image, $data->title, $data->text, $data->slogan);
  }
}

$register = new ShowHero();
