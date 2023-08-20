<?php
const N = 10;

$i = 0;
$array = [];

while ($i < N):
    array_push($array, rand(0, 9));
    $i++;
endwhile;
print_r($array);
$max = 0;
foreach ($array as $value):
    if ($value > $max) {
        $max = $value;
    }
endforeach;

    print_r("max number is:" . $max);

