<?php

namespace App\Phptasks;

use Closure;
use Exception;
use RuntimeException;

class DifferenceCalculator
{
    private array $arrayA = [];
    private array $arrayB = [];

    private array $arrayDiff = [];
    private array $arrayDiffIn = [];

    /**
     * @param int $lenght
     * @param Closure $function
     * @param string $propertyName
     * @return void
     * @throws Exception | RuntimeException
     */
    public function generateArray(int $lenght, Closure $function, string $propertyName): void
    {
        if (!property_exists($this, $propertyName)) {
            throw new Exception('Свойство должно содержаться в классе');
        }
        $array = [];
        while ($lenght > 0) {
            $array[] = $function();;
            $lenght--;
        }

        $this->$propertyName = $array;
        if (count($this->$propertyName) === 0) {
            throw new RuntimeException();
        }
    }

    public function getArrayA(): array
    {
        return $this->arrayA;
    }

    public function getArrayB(): array
    {
        return $this->arrayB;
    }

    public function getArrayDiff(): array
    {
        return $this->arrayDiff;
    }

    public function getArrayDiffIn(): array
    {
        return $this->arrayDiffIn;
    }

    public function printArray(...$array): void
    {
        foreach ($array as $value) {
            var_dump($value);
        }
    }

    public function difference(): void
    {
        $arrayDiff = [];
        foreach ($this->arrayA as $valueA) {
            foreach ($this->arrayB as $valueB) {
                if ($valueA === $valueB) {
                    break;
                }
                $arrayDiff[] = $valueA;
            }

        }
        $this->arrayDiff = $arrayDiff;
    }

    public function differenceWithIn(): void
    {
        $arrayDiffIn = [];
        foreach ($this->arrayA as $valueA) {
            if (!in_array($valueA, $this->arrayB)) {
                $arrayDiffIn[] = $valueA;
            }
        }
        $this->arrayDiffIn = $arrayDiffIn;
    }
}