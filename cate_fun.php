<?php
$cate = array(
            0 => array('id' => 1, 'pid' => 0, 'name' => '江西省'),
            1 => array('id' => 3, 'pid' => 1, 'name' => '上饶市'),
            2 => array('id' => 4, 'pid' => 3, 'name' => '广丰县'),
            3 => array('id' => 5, 'pid' => 2, 'name' => '杭州市'),
            4 => array('id' => 6, 'pid' => 5, 'name' => '西湖'),
            5 => array('id' => 7, 'pid' => 6, 'name' => '断桥'),
            6 => array('id' => 2, 'pid' => 0, 'name' => '浙江省'),
        );
		
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