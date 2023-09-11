<?php


// while
$i = 0;

while($i < 10){
    echo $i;
    echo "<br>";
    $i++;
}
echo '<br>';

// do while
$i = 0;
do {
    echo $i;
    echo "<br>";
    $i++;
} while ($i < 10);

echo '<br>';
// for 
for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo "<br>";
}

echo '<br>';

// foreach
$fruits = ["Apple", "Banana", "Orange"];
foreach($fruits as $i => $fruit){
    echo $i . " " . $fruit;
    echo "<br>";
}
