<?php
const N = 10;

$i = 0;
$array = [];

while ($i < N):
    array_push($array, rand(0, 9));
    $i++;
endwhile;
print_r($array);
$min = 10;
foreach ($array as $value):
    if ($value < $min) {
        $min = $value;
    }
endforeach;

print_r("min number is:" . $min);

