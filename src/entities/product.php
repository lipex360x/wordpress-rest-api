<?php
class Product {
  public $title;
  public $value;
  
  function __construct($title, $value) {
    $this->title = $title;
    $this->value = $value;
  }
}