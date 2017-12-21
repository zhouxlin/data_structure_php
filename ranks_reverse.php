<?php 
  
  $rows = [
    ['rowA1', 'rowB1','rowC1','rowD1'],
    ['rowA2', 'rowB2','rowC2','rowD2'],
    ['rowA3', 'rowB3','rowC3','rowD3'],
    ['rowA4', 'rowB4','rowC4','rowD4'],
    ['rowA5', 'rowB5','rowC5','rowD5'],
  ];

  $clo = [];
  
    foreach ($rows as $r => $row) {
      foreach ($row as $key => $item) {
          $clo[$key][$r] = $item;
      }
    }
  
    var_dump($clo);

  // 结果输出  
  // $clo_res = [
  //   ['rowA1','rowA2','rowA3','rowA4','rowA5'],
  //   ['rowB1','rowB2','rowB3','rowB4','rowB5'],
  //   ['rowC1','rowC2','rowC3','rowC4','rowC5'],
  //   ['rowD1','rowD2','rowD3','rowD4','rowD5'],
  // ];

  