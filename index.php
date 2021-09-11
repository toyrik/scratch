<?php
$a = [-1, -5, 10, 0, 11, 201, 1, 1001];
$max = $a[0];
$min = $a[0];
foreach($a as $value){
    $max = ($max > $value) ? $max : $value;
    $min = ($min > $value) ? $value : $min;
}
echo 'минимальное значение:'. $min . ', Максимальное:'. $max;
echo __DIR__;
?>
