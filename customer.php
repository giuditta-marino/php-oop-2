<?php
require_once 'ordine.php';

class Customer {

  protected $codice_cliente;
  protected $nome;
  protected $cognome;
  protected $data_di_nascita;

  protected $ordini = [];

  public function __construct($codice_cliente, $nome, $cognome, $data_di_nascita) {

    if (!is_string($nome)) {
      throw new Exception('Inserire i dati nel formato corretto');
    }
    
    $this->codice_cliente = $codice_cliente;
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->data_di_nascita = $data_di_nascita;
  }

  public function setCodiceCliente($codice_cliente){
    $this->codice_cliente = $codice_cliente;
  }
  public function getCodiceCliente(){
    return $this->codice_cliente;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getNome(){
    return $this->nome;
  }

  public function setCognome($cognome){
    $this->cognome = $cognome;
  }
  public function getCognome(){
    return $this->cognome;
  }

  public function setDataNascita($data_di_nascita){
    $this->data_di_nascita = $data_di_nascita;
  }
  public function getDataNascita(){
    return $this->data_di_nascita;
  }

  public function insertOrdine($ordine){
    $this->ordini[] = $ordine;
  }
  public function getOrdine(){
    return $this->ordini;
  }
}

class PremiumCustomer extends Customer{
  private $abbonato;

  public function setAbbonato($abbonato){
    $this->abbonato = $abbonato;
  }

  public function getAbbonato(){
    return $this->abbonato;
  }

  public function __construct($codice_cliente, $nome, $cognome, $data_di_nascita, $abbonato) {
    $this->codice_cliente = $codice_cliente;
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->data_di_nascita = $data_di_nascita;
    $this->abbonato = $abbonato;
  }

}

 ?>
