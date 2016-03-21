<?php		
    include_once '../config.php';
    include_once '../libs/php/classes/aplStdClass.php';
		include_once 'libs/php/deliveryClass.php';
		$Delivery = new Delivery();


    include_once('skins/tpl/index.php');

    if(!empty($_GET['day'])){
      list($day,$month,$year) = explode('.',$_GET['day']);
    }else{
      $day = date("d");
      $month = date('m');
      $year = date('Y');
    }
  $karta = new karta_kurijera($day,$month,$year);
?>
