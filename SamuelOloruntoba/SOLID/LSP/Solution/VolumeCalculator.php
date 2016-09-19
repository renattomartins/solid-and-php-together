<?php

namespace SamuelOloruntoba\SOLID\LSP\Solution;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        $summedData = 2;

        // logic to calculate the volumes and then return and array of output

        return $summedData;
    }
}
