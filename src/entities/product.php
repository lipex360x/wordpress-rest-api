<?php
class Product {
  public $title;
  public $value;
  public $image;

  function __construct($title, $value, $image_url) {
    $this->title = $title;
    $this->value = $value;
    $this->image = $image_url;
  }
}