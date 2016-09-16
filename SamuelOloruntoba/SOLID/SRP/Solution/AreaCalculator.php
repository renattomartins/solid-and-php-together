<?php

namespace SamuelOloruntoba\SOLID\SRP\Solucao;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        // logic to sum the areas
    }
}
