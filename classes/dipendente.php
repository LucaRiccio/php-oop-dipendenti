<?php
require_once __DIR__.'/../traits/Contratto.php';

class Dipendente {
  use Contratto;
  protected $nome;
  protected $cognome;
  protected $cf;

  public function __construct($_nome ='A', $_cognome = 'B', $_cf ='C'){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->cf = $_cf;
  }

  public function setNome($_nome){
    if (empty($_nome)){
      throw new Exception("Il nome è necessario");
    }
    $this->nome = $_nome;
  }


  public function setCognome($_cognome){
    if (empty($_cognome)){
      throw new Exception("Il Cognome è necessario");
    }
    $this->cognome = $_cognome;
  }

  public function setCf($_cf){
    if (empty($_cf)) {
      throw new Exception("Il codice fiscale è necessario");
    }
    $this->cf = $_cf;
  }

  // public function setNome($_nome){
  //   if (empty($_nome)){
  //     die('Il nome è obbligatorio');
  //   }
  //   $this->nome = $_nome;
  // }

  // public function setCognome($_cognome){
  //   if (empty($_cognome)){
  //     die('Il cognome è obbligatorio');
  //   }
  //   $this->cognome = $_cognome;
  // }

  // public function setCf($_cf){
  //   if (empty($_cf)) {
  //     die('Il cf è obbligatorio');
  //   }
  //   $this->cf = $_cf;
  // }

}
