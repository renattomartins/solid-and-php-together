<?php

namespace SamuelOloruntoba\SOLID\ISP\Solution;

require 'ManageShapeInterface.php';
require 'ShapeInterface.php';
require 'SolidShapeInterface.php';
require 'Circle.php';
require 'Square.php';
require 'Cuboid.php';
require 'AreaCalculator.php';
require 'VolumeCalculator.php';
require 'SumCalculatorOutputter.php';

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6),
);

$solidShapes = array(
    new Cuboid(2),
    new Cuboid(4),
);

$areas = new AreaCalculator($shapes);
$volumes = new VolumeCalculator($solidShapes);

$output = new SumCalculatorOutputter($areas);
$output2 = new SumCalculatorOutputter($volumes);

echo $output->json();
echo $output->haml();
echo $output->html();
echo $output->jade();

echo $output2->json();
echo $output2->haml();
echo $output2->html();
echo $output2->jade();
