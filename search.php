<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="search.php" method="post">
        <label for="">quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php 
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is :\$ {$total}";
// That`s why - POST method is more secure then GET. 
// If we`ll use GET method - we can see our setings in link. 
?>