<?php
declare(strict_types=1);

use App\Name;
use App\Phptasks\DifferenceCalculator as ds;
use App\Phptasks\NumProcessor as np;
use App\Phptasks\ArrayProcessor as ap;
require __DIR__ . '/vendor/autoload.php';


$numProc = new np();
$arrProc = new ap();
//task 1
//$numProc->PrintRandomNumber();
// task 2
//print_r($numProc->RandomNumbersSum(10));
// task 3
//for ($i = 0; $i < 10; $i++){
//    $num = $numProc->GenerateRandomNumber(0, 100);
//    if ($i === 0){
//        print_r($num . "\n");
//    } else {
//      print_r($numProc->CompareNumber($num, $prevNum) . "\n");
//    }
//    $prevNum = $num;
//}
// task 4
//print_r($numProc->FibonnaciNumber(10));
// task 5
//$numProc->PrintReverseNumber(98456);
// task 6
//$numProc->PrintReversedOddNumbers(3221);
// task 7
//$arrProc->PrintRandomArray(10);
// task 8
//$arrProc->Print2DArray(5,2);
// task 9
//$arrProc->PrintArrayAsTree();
// task 10
//$array = $arrProc->GenerateRandomNumbersArray(0,100,5);
//var_dump($array);
//print_r($arrProc->FindMaxNumberInArray($array));
// task 11
//$array = $arrProc->GenerateRandomNumbersArray(0,100,5);
//var_dump($array);
//print_r($arrProc->FindMinNumberInArray($array));
// task 12
//$array1 = $arrProc->GenerateRandomNumbersArray(-9, 9, 20);
//$array2 = $arrProc->GenerateRandomNumbersArray(-9, 9, 20);
//$arrProc->ComplexComparsion($array1, $array2);
// task 13
//$array = $arrProc->GenerateRandomNumbersArray(5, 12,10);
//var_dump($array);
//$arrProc->PrintSomeNumbers($array);