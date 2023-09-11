<?php

function sum(int $x, int $y): int {
    return $x + $y;
}

// declare - ticks 
function onTick() {
    echo "Tick function called <br>";
}

register_tick_function('onTick');

declare(ticks=3){
 $i = 0;

$length = 10;

while ($i < $length) {
    echo $i . "\n";
    $i++;
}   
}
