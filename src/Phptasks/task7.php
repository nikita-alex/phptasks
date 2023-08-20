<?php
$array = [];
$i = 0;
while ($i < 7):
    array_push($array, rand(0, 100));
    $i++;
endwhile;

foreach ($array as $value):
    print_r($value . "\n");
endforeach;
