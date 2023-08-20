<?php
const N = 10;
$i = 0;
$fib1 = 1;
$fib2 = 0;
$fibSum = 0;
while ($i < N):
    $fibSum = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $fibSum;
    $i++;
endwhile;
print_r($fibSum);



