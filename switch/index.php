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

switch ($date) {
    case "Monday":
        echo "It`s first day of the week";
        break;
    case "Tuesday":
        echo "It`s second day of the week";
        break;
    case "Wednesday":
        echo "It`s thiard day of the week";
        break;
    case "Thursday":
        echo "It`s first day of the week";
        break;
    case "Friday":
        echo "It`s fifth day of the week";
        break;
    case "Seturday":
        echo "It`s sixth day of the week";
        break;
    case "Sunday":
        echo "It`s seventh day of the week";
        break;
}
