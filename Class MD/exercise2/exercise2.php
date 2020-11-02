<?php

require_once 'Point.php';

//Two new Points
$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

//Static function that swaps them
Point::swap_points($p1, $p2);

//Echo swapped points
echo "(" . $p1->getX() . ", " . $p1->getY() . ")" . PHP_EOL;
echo "(" . $p2->getX() . ", " . $p2->getY() . ")" . PHP_EOL;