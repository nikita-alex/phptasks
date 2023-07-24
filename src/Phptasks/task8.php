<?php
const m = 2;
const n = 5;
$i = 0;
$final_array = [];
while ($i < m):
    $j = 0;
    $temp_array = [];
    while ($j < n):
        array_push($temp_array, rand(0, 9));
        $j++;
    endwhile;
    array_push($final_array, $temp_array);
    $i++;
endwhile;
//print_r($final_array);
$i = 0;
$j = 0;

while ($i < m):
    $j = 0;
    $temp_array = $final_array[$i];
    while ($j < n):
        print_r($temp_array[$j] . " ");
        $j++;
    endwhile;
    print_r("\n");
    $i++;
endwhile;

