<?php

namespace SamuelOloruntoba\SOLID\ISP\Solution;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        $summedData = parent::sum();

        return $summedData;
    }
}
