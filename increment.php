<?php
// Arithmetic operators
// + - * / ** %

$x = 10;
$y = 3;
$z = null;
echo "\n";
// $z = $x + $y;
// echo "\n";
// $z = $x - $y;
// echo "\n";
// $z = $x * $y;
// echo "\n";
// $z = $x / $y;
// echo "\n";
// $z = $x ** $y;
// echo "\n";
$z = $x % $y;
echo "\n";
echo "First Example -->  ";
echo $z;

echo "<br>";
// Increment/dectement operators
// ++ / --
echo "Second Example -->   ";
$counter = 0;

$counter++;
$counter-=3;
echo $counter;
echo "<br>";
// Operator Precedence
// ()
// **
// * / %
// + - 

$total = 3 - 0.000768; // 2.999232
echo "Third Example --> ";
echo $total;

?>