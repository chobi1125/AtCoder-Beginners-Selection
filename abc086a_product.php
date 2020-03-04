<?php
  fscanf(STDIN, "%d %d",$a,$b);

  $product = $a * $b;

  if($product % 2 == 1) {
    echo "Odd";
  } else if($product % 2 == 0) {
    echo "Even";
  } 
?>