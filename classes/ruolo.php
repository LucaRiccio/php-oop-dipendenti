<?php

require_once 'dipendente.php';

class Ruolo extends Dipendente {

  public $ruolo;

  public function __construct($_ruolo){
    $this->ruolo = $_ruolo;

  }

}

 ?>