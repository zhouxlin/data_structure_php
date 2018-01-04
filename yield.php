<?php

// 使用 yield 生成 Fibonacci 
function fib($n)
{
  $left = 1;
  $right = 1;
  for ($i = 0; $i < $n; $i++) {
      if ($i == 0 || $i == 1) {
        yield 1;
      } else {
        $res = $left + $right;
        $left = $right;
        $right = $res;
        yield $res;
      }
  }
}

$g = fib(12);

foreach ($g as $fib) 
{
  echo $fib . PHP_EOL;
}
