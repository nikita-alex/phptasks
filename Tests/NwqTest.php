<?php

namespace Tests;

use App\Name;
use PHPUnit\Framework\TestCase;

class  NwqTest extends TestCase
{
    /**
     * @test
     */
    public function testClassConstructor()
    {
        $name1 = new Name();
        $name2 = new Name();

        $this->assertEquals($name1, $name2);
    }

}