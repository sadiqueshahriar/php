<h1>super shop </h1>
<?php 

 include ('super-shop.php');
 
 $shop = new Supershop();
 
 $shop-> setsuper("available","available","available");
 echo $shop-> getsuper();
 ?>
 <h1>Baby care</h1>
 <?php
 $baby = new Supershopbabycare();
 
 $baby-> setSupershopbabycare("available","not available","available","available");
 echo $baby-> getSupershopbabycare();
 ?>
 <h1>Foods</h1>
 <?php
 
 $food = new SupershopFood();
 
 $food->setSupershopFood("available","not available","available","available","available","available");
 echo $food->getSupershopFood();
 



?>