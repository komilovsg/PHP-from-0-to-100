<?php
//if statement = if some condition is true, do something
//               if condition if false, don`t do it
echo"Hello world <br>";


$age = 101;

if($age >=100){
    echo "You are yoo old to Enter to this site";
}
elseif ($age >= 18){
    echo "You may enter this site";
}
elseif($age <= 0){
    echo "That was not a valid age";
}

else{
    echo "You must be 18+ to enter";
}


?>