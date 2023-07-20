<?php
$i = 0;
$fib1 = 1;
$fib2 = 0;
$fib_sum = 0;
$n = 6;
while ($i < $n):
    $fib_sum = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $fib_sum;
    $i++;
endwhile;
print_r($fib_sum);



