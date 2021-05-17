<?php
class Ordine {

  private $codice_acquisto;
  private $data_acquisto;
  private $status_prodotto;
  private $garanzia;

  public function __construct($codice_acquisto, $data_acquisto, $status_prodotto, $garanzia){

    $this->codice_acquisto = $codice_acquisto;
    $this->data_acquisto = $data_acquisto;
    $this->status_prodotto = $status_prodotto;
    $this->garanzia = $garanzia;
  }

  public function setCodiceAcquisto($codice_acquisto)
    {
      $this->codice_acquisto = $codice_acquisto;
    }
    public function getCodiceAcquisto()
    {
      return $this->codice_acquisto;
    }

    public function setDataAcquisto($data_acquisto)
    {
      $this->data_acquisto = $data_acquisto;
    }
    public function getDataAcquisto()
    {
      return $this->data_acquisto;
    }

    public function setStatusProdotto($status_prodotto)
    {
      $this->status_prodotto = $status_prodotto;
    }
    public function getStatusProdotto()
    {
      return $this->status_prodotto;
    }

    public function setGaranzia($garanzia){
      $this->garanzia = $garanzia;
    }
    public function getGaranzia(){
      return $this->garanzia;
    }
}

 ?>
