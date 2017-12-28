<?php
function find_even_index($arr){
  $len = count($arr);
  $index = -1;
  for ($i = 1; $i < ceil($len / 2); $i++)
  {
      $left = array_sum(array_slice($arr, 0, $i));
      $right = array_sum(array_slice($arr, -$i, $i));
      if ($left == $right) {
        $index = $i;
        break;
      }
  }
  return $index;
}

$int = 0.99999999999999999; 
echo floor($int); // returns 0 