<?php 

function tower($n)
{
  $res = [];
  $len = $n * 2 - 1;
  for ($i = 0; $i < $n; $i++) {
    $floor = str_repeat('*', $i * 2 + 1);
    $floor = str_pad($floor, $len, ' ', STR_PAD_BOTH);
    $res[$i] = $floor;
  }

  return $res;
}

print_r(tower(3));