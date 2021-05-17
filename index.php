<?php
  require_once 'customer.php';
  require_once 'product.php';

  $customer1 = new Customer('12345', 'Mario', 'Rossi', '01/01/1989');
  var_dump($customer1);

  $product1 = new Product('4567' , 'bicicletta', 'mountain-bike', '331-x', 'è una bici fantastica, comprala!');
  var_dump($product1);

  $premiumCustomer1 = new PremiumCustomer('6789', 'Francesco', 'Neri', '02/02/1990', true);
  var_dump($premiumCustomer1);

  $ordine1 = new Ordine('1333', '03/03/2019', 'received', false);
  var_dump($ordine1);

  $ordine2 = new Ordine('555444', '04/04/2020', 'received', true);
  var_dump($ordine2);

  $customer1->insertOrdine($ordine1);
  $customer1-> insertOrdine($ordine2);

  var_dump($customer1);


  try {
    $customer2 = new Customer('22222', 4444, 'Marino', '13/03/2000');
  } catch (Exception $e) {
    echo 'Devi inserire una stringa per il nome <br>';
    echo 'Errore: ' . $e->getMessage();
  }

  var_dump($customer2);
?>
