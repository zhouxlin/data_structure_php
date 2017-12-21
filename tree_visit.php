<?php 

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
  $node = array_shift($tree);
  if (isset($node['children']) && !empty($node['children'])) {
      $children = array_reverse($node['children']);
      foreach ($children as $item) {
        array_unshift($tree,$item);      
      }
  }
  unset($node['children']);
  $list[] = $node;
}

print_r($list);