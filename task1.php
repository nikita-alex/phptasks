<?php
echo "Enter N number: ";
$i = 0;
$n = readline();
while ($i < $n):
    $num = rand(-21, 35);
    print_r(strval($num) . "\n");
    $i++;
endwhile;



