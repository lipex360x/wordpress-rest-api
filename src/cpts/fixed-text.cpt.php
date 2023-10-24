<?php
class FixedTextCPT extends CPTFactory {
  function __construct() {
    $this->post_type    = 'fixed-text';
    $this->singularName = 'Textos Fixos';
    $this->pluralName   = 'Textos Fixos';
    $this->menuIcon     = 'dashicons-hourglass';
    parent::register();
  }
}
$register = new FixedTextCPT();
