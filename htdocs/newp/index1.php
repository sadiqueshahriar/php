<?php

$sales_amount = 100000;

if ($sales_amount>100000) {
  // code...
   echo "commission 10%";
 }
elseif ($sales_amount>80000) {
  // code...
  echo "commission 8%";

}
elseif ($sales_amount>60000) {
  // code...
  echo "commission 6%";
}


$name = "Shahriar Shuvo";
$fathers_name = "shamshul haque";
$institution = "mamurjor";
$location = "Dhaka";
$cell = "01234567";
$course = "LEDP";
$time = "evening";
$topic = "php";
$type = "online";

echo "My name is ".$name."</br> My fathtes name is ".$fathers_name."</br>My institution is ".$institution."</br>My location ".$location."</br>Phone number ".$cell."</br>My course ".$course."</br>Time ".$time."</br>My topic ".$topic."</br>Type ".$type;

 ?>
