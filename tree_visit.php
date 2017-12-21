<?php 
/**
 *  遍历树的非递归实现 
 *  关键是模拟栈 
 */
$tree = [
  ['id' => 1, 'name' => 'baseketball', 'pid' => 0, 'children' => [
      ['id' => 2, 'name' => 'baseketballshose', 'pid' => 1, 'children' => [
          ['id' => 3, 'name' => 'nike', 'pid' => 2]
        ]
      ],
      ['id' => 2, 'name' => 'baseketballcloth', 'pid' => 1]    
    ]
  ],
  ['id' => 4, 'name' => 'football', 'pid' => 0, 'children' => [
        ['id' => 5, 'name' => 'footballshose', 'pid' => 4]
      ]
  ]
];

$list = [];

while (!empty($tree)) {
  $node = array_shift($tree); // 首元素出栈
  if (isset($node['children']) && !empty($node['children'])) {
      //儿子元素倒序入栈，
      $children_len = count($node['children']); 
      for ($i = $children_len - 1; $i >= 0; $i--) {
        array_unshift($tree,$node['children'][$i]);      
      }
  }
  unset($node['children']);
  $list[] = $node;
}

print_r($list);