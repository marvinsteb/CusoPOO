<?php
class Account{
  public $id;
  Public $name;
  Public $document;
  Public $email;
  Public $password;
  public function __construct($name, $document, $email, $password )
  {
    $this->name = $name;
    $this->document = $document;
    $this->email = $email;
    $this->password = $password;
  }
  public function printDataAccount(){
    echo "<br>Name: {$this->name} <br>Document: {$this->document} <br>Email: {$this->email} <br>Password {$this->password}";
  }  
}