<?php

namespace App\Phptasks;
use App\Phptasks\NumProcessor as np;
class ArrayProcessor
{
    public function GenerateRandomNumbersArray(int $min, int $max, int $length):array{
        $array = [];
        for ($i = 0; $i < $length; $i++){
            $array[] = rand($min, $max);
        }
        return $array;
    }

    private function Generate2DArray($M, $N):array{
        $array = [];
        for($i = 0; $i < $M; $i++){
            $array[] = $this->GenerateRandomNumbersArray(-9, 9, $N);
        }
        return $array;
    }

    public function PrintRandomArray(int $length):void{
        var_dump($this->GenerateRandomNumbersArray(min: -9, max:9, length: $length));
    }

    public function Print2DArray($M, $N):void{
        $array2D = $this->Generate2DArray($M, $N);
        foreach ($array2D as $value1){
            foreach ($value1 as $value2){
                print_r($value2 . " ");
            }
            print_r("\n");
        }
    }

    public function PrintArrayAsTree($length):void{
        $array = $this->GenerateRandomNumbersArray(0,9,$length);
        $i = 1;
        $elemRemaining = count($array);
        while ($elemRemaining > 0){
            if ($i < $elemRemaining){
                print_r(array_slice($array, $i, $i));
            }else{
                print_r(array_slice($array, $i, $elemRemaining));
            }
            $elemRemaining -= $i;
            $i++;
        }
    }

    public function FindMaxNumberInArray($array): int{
        $max = $array[0];
        foreach ($array as $value){
            if ($value > $max){
                $max = $value;
            }
        }
        return $max;
    }

    public function FindMinNumberInArray($array): int{
        $min = $array[0];
        foreach ($array as $value){
            if ($value < $min){
                $min = $value;
            }
        }
        return $min;
    }

    public function ComplexComparsion($array1, $array2): void{
        $np = new NumProcessor();
        $j = 1;
        for ($i = 0; $i < 18; $i+=3){
            print_r($np->CompareNumber($array1[$i], $array2[$j]) . "\n");
            $j += 2;
        };
    }

    public function PrintSomeNumbers($array){
        foreach ($array as $value){
            switch ($value){
                case 5:
                    print_r("Пять" . "\n");
                    break;
                case 6:
                    print_r("Шесть" . "\n");
                    break;
                case 7:
                    print_r("Семь" . "\n");
                    break;
                default:
                    print_r("Другое число" . "\n");
            }
        }
    }
}