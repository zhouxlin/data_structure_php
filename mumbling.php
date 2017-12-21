<?php
function accum($s) {
    // your code
    
    if (empty($s)) {
        return '';
    }
    $len = strlen($s);
    $result = [];
    for($i = 0; $i < $len; $i++) {
        $result[$i] = ucwords(str_repeat(strtolower($s[$i]), $i + 1));
    }
    print_r($result);
    return join('-', $result);
}

echo accum('abc');