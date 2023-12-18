<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="MasterCard">
        MasterCard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>
<?php
// if(isset($_POST["confirm"])){

//     $credit_card = null;

//     if(isset($_POST["credit_card"])){
//         $credit_card = $_POST["credit_card"];
//     }if($credit_card == "Visa" ){
//         echo "You selected {$credit_card}";
//     }elseif($credit_card == "MasterCard" ){
//         echo "You selected {$credit_card}";
//     }elseif($credit_card == "American Express" ){
//         echo "You selected {$credit_card}";
//     }
//     else{
//         echo "Plese make a selection";
//     }
//     }

if (isset($_POST["confirm"])) {

    $credit_card = null;

    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }

    switch ($credit_card) {
        case "Visa":
        case "MasterCard":
        case "American Express":
            echo "You selected {$credit_card}";
            break;
        default:
            echo "Please make a selection";
    }
}

?>