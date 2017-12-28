<?php

function sums($n) {

  if(!is_int($n)) {
    return false;
  }
  $n = range(1, $n);

  return array_sum($n);
}

print(sums(100));