<?php
declare(strict_types=1);
namespace App;

class Name
{
    public string $letter = '';
    protected int $number = 0;
    private array $array = [];
    private ?Name $privateName = null;

    public function __construct(
        array  $array = [],
        string $letter = '',
        int    $number = 0,
    )
    {
        $this->letter = $letter;
        $this->number = $number;
        $this->array = $array;
    }

    public function setPrivateName(?Name $privateName): self
    {
        $this->privateName = $privateName;
        return $this;
    }

    public function getPrivateName(): ?Name
    {
        return $this->privateName;
    }

    public function getArray(): array
    {
        return $this->array;
    }
}