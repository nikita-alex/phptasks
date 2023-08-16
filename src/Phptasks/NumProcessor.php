<?php

namespace App\Phptasks;
class NumProcessor
{
public function PrintRandomNumber():void {
    print_r($this->GenerateRandomNumber(-29, 35));
}

public function RandomNumbersSum($numCount):int {
    $sum = 0;
    for($i = 0; $i < $numCount; $i++){
        $sum += $this->GenerateRandomNumber(0, 9);
    }
    return $sum;
}

public function CompareNumber (int $num1, int $num2): string{
    $string = "";

    if ($num1 > $num2){
        $string = strval($num1 . " больше чем " . $num2);
    } elseif ($num1 < $num2){
        $string = strval($num1 . " меньше чем " . $num2);
    } else {
        $string = strval($num1 . " равно " . $num2);
    }

    return $string;
}

public function GenerateRandomNumber(int $min, int $max):int {
    return rand($min, $max);
}

public function FibonnaciNumber($N):int{
    $i = 0;
    $fib1 = 1;
    $fib2 = 0;
    $fibSum = 0;
    while ($i < $N-1) {
        $fibSum = $fib1 + $fib2;
        $fib1 = $fib2;
        $fib2 = $fibSum;
        $i++;
    }
    return $fibSum;
}

public function PrintReverseNumber($num):void{
    $reversedNum = array_reverse(str_split(strval($num)));
    foreach ($reversedNum as $value){
        print_r($value);
    }
}

public function PrintReversedOddNumbers($num):void{
    $oddsCount = 0;
    $numAsArray = str_split(strval($num));
    foreach (array_reverse($numAsArray) as $value){
        if ($value % 2 !== 0){
            $oddsCount++;
            print_r($value . "\n");
        }
    }
    if ($oddsCount === 0) {
        print_r("Нечетных чисел нет");
    }
}

}
