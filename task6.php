<?php
$number = 4441;
$i = 10;
$allEven = true;
while ($i < 1000000):
    $res = (strval($number % $i)[0]);
    if ($res[0] % 2 != 0) {
        print_r(strval($res[0]) . "\n");
        $allEven = false;
    }
    $i = $i * 10;
endwhile;
if ($allEven == true) {
    print_r("Нечетных цифр не обнаружено!");
}


