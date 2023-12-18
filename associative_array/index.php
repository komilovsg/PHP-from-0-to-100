<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
// associative array = An array made of key => value pairs

// countries => capitals
// id => username
// item => price

$capitals = array("USA"=>"Washington D.C.", 
                  "Japan"=>"Kyoto", 
                  "South Korea"=>"Seoul", 
                  "India"=>"New Delhi");

                //   echo $capitals["USA"]. "<br>";
                //   echo $capitals["Japan"]. "<br>";
                //   echo $capitals["South Korea"]. "<br>";
                //   echo $capitals["India"]. "<br>";  //it`s very long 

                //чтобы изменить что нибудь внутри нужно следующее: 
                // $capitals["USA"] = "Las Vegas";
                // $capitals["China"] = "Beijing"; 
                //array_pop($capitals); // Удаляет последний элемент в массиве
                // array_shift($capitals); // Удаляет первый элемент в массиве
                // $capitals = array_keys($capitals); //нумерация
                // $values = array_values($capitals); // только столицы. 
                // $capitals = array_flip($capitals);
                // $capitals = array_reverse($capitals);
                // echo count($capitals);

                //here is  short 
                // foreach($capitals as $key => $value){
                //     echo "{$key} = {$value} <br>";
                // }
                // такой вид кода более коротки и более грамотный! 

               
                $capital = $capitals[$_POST["country"]];
                echo "The capital is: ". $capital;
?>