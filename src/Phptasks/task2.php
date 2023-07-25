<?php
const N = 10;
$i = 0;
$sum = 0;
while ($i < N):
    $num = rand(0, 10);
    $sum = $sum + $num;
    $i++;
endwhile;
print_r("Sum is: " . $sum . "\n");


