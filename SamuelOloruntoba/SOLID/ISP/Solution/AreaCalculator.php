<?php

namespace SamuelOloruntoba\SOLID\ISP\Solution;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ManageShapeInterface) {
                $area[] = $shape->calculate();
                continue;
            }

            throw new AreaCalculatorInvalidShapeException();
        }

        return array_sum($area);
    }
}
