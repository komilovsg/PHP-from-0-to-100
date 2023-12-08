<?php
//_________________________________________ First part is started
$name = "komilovsg";
$food = "pizza";
$email = "komilovsg@gmail.com";

$age = 29;
$users = 2;
$quantity = 3;

$gpa = 4.4;
$price = 9.99;
$tax_rate = 4.9;

$emgloyed = true;
$online = false;
$for_sale = true;

echo "Hello my name is {$name}";
echo "<br>";
echo "I love {$food}";
echo "<br>";
echo "You can write <strong>me</strong> {$email}";
echo "<br>";
echo "I`m {$age} years old";
echo "<br>";
echo "There are {$users} users online";
echo "<br>";
echo "You would like to buy {$quantity} items";
echo "<br>";
echo "Your gpa is: {$gpa}";
echo "<br>";
echo "your pizza is \${$price}";
echo "<br>";
echo "The sales tax rate is: {$tax_rate}%";
echo "<br>";
echo "Onlina status: {$online}";
echo "<br>";
echo "<br>";

echo "You have ordered {$quantity} x {$food}";
echo "<br>";
$total = $quantity * $price;
echo "Your total is \${$total}";
//____________________________________________________      First part is end

// Arithmetic operators
// + - * / ** %

// Increment/dectement operators
// ++, --

// Operator Precedence
// ()
// **
// * / %
// + - 

?>