<?php
  // lesson3-1
  for ($i = 1; $i <= 10; $i++) {
    echo $i;
  }
  echo "\n";

  // lesson3-2
  $total = 0;
  for ($i = 1; $i <= 50; $i++) {
    if($i % 2 == 0){
      $total += $i;  
    }
  }
  echo $total."\n";

  // lesson3-3
  for ($i = 0; $i < 10; $i++) {
    $j = 10-$i;
    echo $j;
  }
?>