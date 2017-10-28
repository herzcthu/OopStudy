<?php
namespace OopStudy;

require_once 'autoloader.php';

$body = new DesignMercedesBody('hatchback');
$engine = new DesignMercedesEngine();

$car = new Car($body, $engine);

echo "\n";
echo $car->getBodyType();
echo "\n";
echo $car->getEngineType();
echo "\n";
