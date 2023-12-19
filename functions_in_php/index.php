<?php
//function = write some code once, reuse when you need it
//           type () after function name to invoke
//           ex. add() subtract() multiply() divide()

// function happy_birthday($first_name, $age){

//     echo "Happy Birthday dear {$first_name}! <br>";
//     echo "Happy Birthday to you! <br>";
//     echo "Happy Birthday dear {$first_name}! <br>";
//     echo "You are {$age} years old! <br><br>";

// }

// happy_birthday("Alex", 30);
// happy_birthday("Max", 35);
// happy_birthday("Nina", 65);


    // function is_even($number){
    //     $result = $number % 2;
    //     return $result;
    // }

    // echo is_even(10);


        // function hypotenuse(float $a, float $b){
        //     $c = sqrt($a ** 2 + $b ** 2);
        //     return $c;

        // }

        // echo hypotenuse("pizza", "taco");


            // $username = "kom the Code";
            $username = array("Kom", "The", "Code");
            $phone = "123-456-7890";

            // $username = strtolower($username);
            // $username = strtoupper($username);
            // $username = trim($username); // убирает дифиз до слова и после 
            // $username = str_pad($username, 20, "/"); //добавляет символы в конец. 
            // $phone = str_replace("-", "", $phone); //Убирает указанные элементы.
            // $username = strrev($username); // revers
            // $username = str_shuffle($username);// хаотично меняет индекс всех букв. 
            // $username = strcmp($username, "kom ko");// сравнение 
            // $username = strlen($username); // чистывает количество индексом и выводит в виде числа.
            // $index = strpos($username, " "); // показывает на каком индексе есть " " та или иная настройка которую мы задаем.  
            // $firstname = substr($username, 0, 3); // вырезает по индексам от и до указанного 
            // $lastname = substr($username, 4);
            // $fullname = explode(" ", $username);

            // foreach($fullname as $name){
            //     echo $name . "<br>";
            // };
            //                             TODO                                TIME 2h.43m
            $username = implode(" + ", $username); // соеденяет из частей массивая в одно предложение 
                // в "  " можно добавить любые настройки которые нужно внести между словами в тексте.

            echo $username;





?>
