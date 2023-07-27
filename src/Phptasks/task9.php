<?php
const N = 11;

$elemRemaining = N;
$j = 1;
while ($elemRemaining > 0):
    $i = 0;

    if ($j > $elemRemaining) {
        $j = $elemRemaining;
    }

    while ($i < $j):
        print_r(rand(0, 9) . " ");
        $elemRemaining--;
        $i++;
    endwhile;

    print_r("\n");
    $j++;

endwhile;

