<?php
#conditionals
$score = 10;

if($score == 10){
    echo "Ten";
} elseif($score == 9){
    echo "Nine";
} else {
    echo "Invalid";
}

# switch case
$color = "red";

switch ($color) {
    case 'red':
        echo "Your favorite color is red";
        break;
    
    default:
        echo "Your favorite color is something else $color";
        break;
}

# match
$color = "red";

$message = match ($color) {
    'red'   => "Your favorite color is red",
    default => "Your favorite color is something else $color",
};

echo $message;

?>