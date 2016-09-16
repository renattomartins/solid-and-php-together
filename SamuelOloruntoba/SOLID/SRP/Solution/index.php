<?php

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6),
);

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);

echo $output->json();
echo $output->haml();
echo $output->html();
echo $output->jade();
