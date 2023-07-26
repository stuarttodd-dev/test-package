<?php

namespace Stuarttodd\RandomNumber;

class RandomNumber
{
    public function generate()
    {
        return rand(1, 100);
    }
}