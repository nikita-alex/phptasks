<?php
const m = 3;
const n = 3;
$i = 0;
$final_array = [];
while ($i < m):
    $j = 0;
    $temp_array = [];
    while ($j < n):
        array_push($temp_array, rand(0, 10));
        $j++;
    endwhile;
    array_push($final_array, $temp_array);
//    unset($temp_array);
    $i++;
endwhile;
var_dump($final_array);


