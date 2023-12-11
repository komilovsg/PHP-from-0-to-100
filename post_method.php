<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_method.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br><br>
        <label>y:</label>
        <input type="text" name="y"> <br><br>
        <label>z:</label>
        <input type="text" name="z"> <br><br>
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        $z = $_POST["z"];

        $total = null;
        //absolute varieble function
        // $total = abs($x);

        // $total = round($x); //округления до целого цисла.
        // $total = floor($x); //округление в меньшую сторону 
        // $total = ceil($x);
        // $total = sqrt($x); // вытаскивает из под корня число. 
        // $total = pow($x, $y); //умножает числа друг на друга. 

        // $total = max($x, $y, $z); //Выводит нам наибольшее число из заданных чисел. 
        $total = min($x, $y, $z); // Выводимт минимальное число из заданых чисел. 


        echo $total;

?>