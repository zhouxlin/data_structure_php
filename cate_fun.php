<?php

/**
 * 递归生成树
 */
$cate = array(
            0 => array('id' => 1, 'pid' => 0, 'name' => '����ʡ'),
            1 => array('id' => 3, 'pid' => 1, 'name' => '������'),
            2 => array('id' => 4, 'pid' => 3, 'name' => '�����'),
            3 => array('id' => 5, 'pid' => 2, 'name' => '������'),
            4 => array('id' => 6, 'pid' => 5, 'name' => '����'),
            5 => array('id' => 7, 'pid' => 6, 'name' => '����'),
            6 => array('id' => 2, 'pid' => 0, 'name' => '�㽭ʡ'),
        );
// 递归生成树
function cate($arr, $pid = 0) 
{
	if (empty($arr)) {
		return [];
	}
	$res = [];
	foreach($arr as $index => $item) {
		if  ($item['pid'] == $pid) {
			unset($arr[$index]);
			$item['child'] = cate($arr, $item['id']);
			
			$res[] = $item;
		}
	}
	
	return $res;
}

print_r(cate($cate, 0));