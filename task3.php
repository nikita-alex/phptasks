<?php
echo "Enter N number: ";
$i = 0;
$sum = 0;
$n = readline();
while ($i < $n):
    $num = rand(0, 10);
    if ($i == 0){
        print_r($num . "\n");
        $prev = $num;
    } else {
        if ($num > $prev) {
            print_r($num . " больше " . $prev);
        } elseif ($num < $prev) {
            print_r($num . " меньше " . $prev);
        } else {
            print_r($num . " равно " . $prev);
        }
        print_r("\n");
        $prev = $num;
    }
    $i++;
endwhile;



