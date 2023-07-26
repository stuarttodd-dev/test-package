<?php

namespace Stuarttodd\RandomNumber;

class RandomNumber
{
    public static function generate(): int
    {
        return rand(1, 1000);
    }
}