<?php
$number = 43556;
$i = 10;
while ($i < 1000000):
    print_r((strval($number % $i)[0]) . "\n");
    $i= $i * 10;
endwhile;



