<?php
const N = 10;

$i = 0;
$arrayA = [];
$arrayB = [];


while ($i < N):
    array_push($arrayA, rand(0, 20));
    array_push($arrayB, rand(0, 20));
    $i++;
endwhile;

var_dump($arrayA);
var_dump($arrayB);
print_r("\n");


foreach ($arrayA as $valueA):
    $isUnique = true;
    foreach ($arrayB as $valueB):
        if ($valueA == $valueB) {
            $isUnique = false;
            break;
        }
    endforeach;

    if ($isUnique == true) {
        print_r("unique number: " . $valueA . "\n");
    }

endforeach;
