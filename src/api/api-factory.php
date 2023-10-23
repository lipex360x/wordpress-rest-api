<?php
class APIFactory {
  private $search;
  private $page;
  private $perPage;
  private $order;
  private $slug;

  function register() {
    $restParams = array(
      'methods'   => $this->method,
      'callback'  => array($this, 'execute'),
    );
    register_rest_route($this->path, $this->route, array($restParams));
  }

  function execute($request) {
    $this->search   = sanitize_text_field($request['q']) ?: '';
    $this->page     = sanitize_text_field($request['page']) ?: 1;
    $this->perPage  = sanitize_text_field($request['perPage']) ?: 10;
    $this->order    = sanitize_text_field($request['order']) ?: 'asc';
    $this->slug     = sanitize_text_field($request['slug']) ?: '';

    $output = $this->response($this->query());

    if(!is_array($output)) return $output;
    
    return array(
      'data'    => $output,
      'page'    => $this->page,
      'perPage' => $this->perPage,
      'order'   => $this->order
    );
  }

  function query() {
    $query = array(
      'post_type'       => $this->post_type,
      's'               => $this->search,
      'paged'           => $this->page,
      'name'            => $this->slug,
      'posts_per_page'  => $this->perPage,
      'post_status'     => 'publish',
      'order'           => $this->order,
    );
    
    return new WP_Query($query);
  }
}