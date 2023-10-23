<?php
class CPTFactory {
  function register() {
    $labels = array(
      'name' => $this->pluralName,
      'sigular_name'  => $this->singularName,
      'add_new_item'  => "Adicionar novo {$this->singularName}",
      'edit_item'     => "Editar {$this->singularName}",
      'all_items'     => "Todos {$this->pluralName}",
    );

    $args = array(
      'labels'        => $labels,
      'has_archive'   => true,
      'public'        => true,
      'menu_icon'     => $this->menuIcon,
      'show_in_rest'  => true,
      'supports'      => array('title', 'author'),
    );

    register_post_type($this->post_type, $args);
    add_action('pre_get_posts', array($this, 'callbackQuery'));
  }

  function callbackQuery($query) {
    $archive = is_archive() ? get_queried_object()->name : false;
    
    if(!is_admin() && $query->is_main_query() && is_post_type_archive($archive)) {
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }  
  }
}