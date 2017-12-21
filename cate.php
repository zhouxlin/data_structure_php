<?php

$cateList = [
  '1' => ['id' => 1, 'name' => '颜色', 'parent_id' => 0],
  '2' => ['id' => 2, 'name' => '规格', 'parent_id' => 0],
  '3' => ['id' => 3, 'name' => '白色', 'parent_id' => 1],
  '4' => ['id' => 4, 'name' => '黑色', 'parent_id' => 1],
  '5' => ['id' => 5, 'name' => '大', 'parent_id' => 2],
  '6' => ['id' => 6, 'name' => '小', 'parent_id' => 2],
  '7' => ['id' => 7, 'name' => '黄色', 'parent_id' => 1],
];


$array = array_combine(
  $cateList, 
  array_column($cateList, 'id')
);

foreach ($cateList as $item) {
  if (isset($item['parent_id']) && !empty($cateList[$item['parent_id']])) {
      $cateList[$item['parent_id']]['children'][] = &$cateList[$item['id']];
  } else {
    $result[] = &$cateList[$item['id']];
  }
}

print_r($result);