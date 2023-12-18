<?php
$temp = 25;

if($temp >=0 && $temp <= 30){
    echo  "The weather is good <br>";
}
else{
    echo "The weather is bad <br>";
}


$age = 15;
$citizen = false;

if(!$age >= 18 || !$citizen){
    echo "You can vote <br>";
}
else {
    echo "You not citizen, you cannot vote <br>";
}

?>