<?php
const N = 5;

$i = 0;
$initArray = [];

while ($i < N):
    array_push($initArray, rand(0,9));
    $i++;
endwhile;
