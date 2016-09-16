<?php

namespace SamuelOloruntoba\SOLID\SRP\Violacao;

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

    // Violation:
    // The problem with the output method is that the AreaCalculator handles
    // the logic to output the data. Therefore, what if the user wanted to
    // output the data as json or something else?
    public function output()
    {
        return implode('', array(
            '<h1>',
                'Sum of the areas of provided shapes: ',
                $this->sum(),
            '</h1>',
        ));
    }
}
