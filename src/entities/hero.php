<?php
class Hero {
  public $imageUrl;
  public $title;
  public $text;
  public $slogan;

  function __construct($imageUrl, $title, $text, $slogan) {
    $this->imageUrl = $imageUrl;
    $this->title = $title;
    $this->text = $text;
    $this->slogan = $slogan;
  }
}