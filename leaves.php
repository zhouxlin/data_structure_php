<?php

/**
 * 分类数组取出所有叶子元素
 */

$cateList = [
  ['id' => 1, 'name' => '颜色', 'parent_id' => 0],
  ['id' => 2, 'name' => '规格', 'parent_id' => 0],
  ['id' => 3, 'name' => '白色', 'parent_id' => 1],
  ['id' => 4, 'name' => '黑色', 'parent_id' => 1],
  ['id' => 5, 'name' => '大', 'parent_id' => 3],
  ['id' => 6, 'name' => '小', 'parent_id' => 2],
  ['id' => 7, 'name' => '黄色', 'parent_id' => 1],
];


$cateList = array_combine(
  array_column($cateList, 'id'), 
  $cateList
);

foreach ($cateList as $key => $cate) {
  if (isset($cateList[$cate['parent_id']]))
  {
    unset($cateList[$cate['parent_id']]);
  } 
}

print_r($cateList);