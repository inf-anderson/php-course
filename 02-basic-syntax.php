<?php
// Basic print
echo "Hello World";
print "anderson's Course";

// Variables
$name = "Anderson";
$age = 20;
$height = 1.80;
$canFly = false;

// Template String
echo "{$name} is {$age} years old and is {$height} tall";

// assign by value vs assign by reference

// assign by value
$a = 10;
$b = $a;
$b = 20;
echo $a; // 10

// assign by reference
$a = 10;
$b = &$a;
$b = 20;
echo $a; // 20

?>