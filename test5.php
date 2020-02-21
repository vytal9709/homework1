<?php
$cars['bmw'] = ["model" => "x5", "speed" => 120, "doors" => 5, "year" => 2015,];
$cars['toyota'] = ["model" => "Supra", "speed" => 140, "doors" => 3, "year" => 2012,];
$cars['opel'] = ["model" => "Vivaro", "speed" => 100, "doors" => 4, "year" => 2010,];

foreach ($cars as $carName => $car) {
    echo 'CAR ' . $carName . '<br>';
    echo implode(' ', $car) . '<br>';
    echo '<br>';
}