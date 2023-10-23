<?php
class TransactionCPT extends CPTFactory {
  function __construct() {
    $this->post_type    = 'transactions';
    $this->singularName = 'Transação';
    $this->pluralName   = 'Transações';
    $this->menuIcon     = 'dashicons-hourglass';
    parent::register();
  }
}
$register = new TransactionCPT();
