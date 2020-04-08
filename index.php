<?php

include "class_lib.php";

$height = 20;
$width = 20;

$rectangle = new Rectangle($height, $width);

echo "Rectangle " . $rectangle->display();
echo "<br>Chu vi la: " . $rectangle->getPerimeter();
echo "<br>Dien tich la: " . $rectangle->getArea();