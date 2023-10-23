<?php
class Product {
  public $id;
  public $name;
  public $title;
  public $value;
  public $image;

  function __construct($id, $name, $title, $value, $image_url) {
    $this->id    = $id;
    $this->name  = $name;
    $this->title = $title;
    $this->value = $value;
    $this->image = $image_url;
  }
}