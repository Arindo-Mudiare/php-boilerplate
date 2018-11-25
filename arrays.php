<?php
// Indexed
$people = array('Kevin', 'Jeremy', 'Sara');
$people[3] = 'Kallim';
$people[] = 'Habib';
echo $people[2];
var_dump($people);

// Associative Arrays
$folks = array('Brad' => 35,'Jose' => 32, 'Yakub' => 32);
echo $folks['Brad'];
// Multi-Dimensional
$cars = array(
  array('Honda', 20, 10),
  array('Mazda', 40, 15),
  array('Nissan', 30, 35),
);
echo $cars[1][0];


?>