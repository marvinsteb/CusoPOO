<?php
require_once 'account.php';

class Drver extends Account{
  public function __construct($name, $document, $email, $password)
  {
    parent::__construct($name,$document,$email,$password);
  }
}