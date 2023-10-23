<?php
class TransactionCPT extends CPTFactory {
  function __construct() {
    $this->slug = 'transactions';
    $this->singularName = 'Transação';
    $this->pluralName = 'Transações';
    $this->menuIcon = 'dashicons-hourglass';
    parent::create();
  }
}
$register = new TransactionCPT();
