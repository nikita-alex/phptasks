<?php
echo "Enter N number: ";
$i = 0;
$sum = 0;
$n = readline();
while ($i < $n):
    $num = rand(0, 10);
    $sum = $sum + $num;
    $i++;
endwhile;
print_r("Sum is: " . $sum . "\n");


