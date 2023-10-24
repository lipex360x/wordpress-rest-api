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
  }
}