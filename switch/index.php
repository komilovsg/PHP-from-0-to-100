<?php

$grade = "pizza";

switch ($grade) {
    case "A":
        echo "You did great <br>";
        break;
    case "B":
        echo "You did good <br>";
        break;
    case "C":
        echo "You did okay <br>";
        break;
    case "D":
        echo "You did poorly <br>";
        break;
    case "F":
        echo "You failed <br>";
        break;
    default:
        echo "{$grade} is not valid <br>";
}

echo "\n";
$date = date("l");
echo $date;