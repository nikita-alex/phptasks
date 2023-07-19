<?php
declare(strict_types=1);

use App\Name;

require __DIR__ . '/vendor/autoload.php';
$name = new Name(
    array: [5, 6],
    letter: "a",
    number: 6,
);
$name1 = new Name(
    array: [7, 6]
);
$name->setPrivateName($name1);
$private = $name->getPrivateName()->getArray();
var_dump($name);
var_dump($private);
