<?php

use Stuarttodd\RandomNumber\RandomNumber;

use PHPUnit\Framework\TestCase;

class RandomNumberTest extends TestCase
{
    public function testGenerateReturnsNumberBetweenOneAndOneThousand()
    {
        $class = new RandomNumber();
        $result = $class->generate();
        $this->assertGreaterThanOrEqual(1, $result);
        $this->assertLessThanOrEqual(1000, $result);
    }
}
