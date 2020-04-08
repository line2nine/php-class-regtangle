<?php

include "Rectangle.php";

$height = 20;
$width = 5;

$rectangle = new Rectangle($height, $width);

echo "Rectangle " . $rectangle->display() . "<br><br>";

$rectangle->render();

echo "<br>Chu vi la: " . $rectangle->getPerimeter();
echo "<br>Dien tich la: " . $rectangle->getArea();