<?php

$info = array("shuvo","01234", "Dhaka");
$count =count($info);

echo $count."</br>";

for ($i=0; $i<$count ; $i++) {
  echo $i;
echo $info[$i]."</br>";
}
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}


$z=0;
while ($z < $count) {
  echo $info[$z];
  $z++;

}






 ?>
