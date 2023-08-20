<?php


use PHPUnit\Framework\TestCase;

class DiffCalcTest extends TestCase
{
    public function testDiff()
    {
        $calc = new \App\Phptasks\DifferenceCalculator();
        $calc->generateArray(
            lenght: 5,
            function: function (): int {
                return rand(0, 9);
            },
            propertyName: 'arrayA');

        $calc->generateArray(
            lenght: 5,
            function: function (): int {
                return rand(0, 9);
            },
            propertyName: 'arrayB');

        $calc->difference();

        $calc->differenceWithIn();

        $diff = $calc->getArrayDiff();
        $diffIn = $calc->getArrayDiffIn();

        $this->assertEquals($diffIn, $diff);
    }
}
