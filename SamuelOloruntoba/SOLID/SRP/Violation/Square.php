<?php

namespace SamuelOloruntoba\SOLID\SRP\Violation;

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }
}
