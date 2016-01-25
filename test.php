<?php

$ages = array(5, 6, 99);

array_push($ages, 11);

echo var_dump($ages);

echo var_dump($ages[2]);

foreach($ages as $age){
  echo $age . "\n";
}
?>
