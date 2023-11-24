<?php

function findMax() {
    $num = func_num_args();
    if ($num === 0) {
        return null;
    }
    
    $max = PHP_INT_MIN;
    
    for ($i = 0; $i < $num; $i++) {
        $currentNumber = func_get_arg($i);
        if ($currentNumber > $max) {
            $max = $currentNumber;
        }
    }
    
    return $max;
}

$result = findMax(10, 5, 8, 20, 15,80,10,20);
echo "Big Number " . $result;

?>