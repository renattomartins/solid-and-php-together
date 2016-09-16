<?php

namespace SamuelOloruntoba\SOLID\OCP\Violation;

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }
}
