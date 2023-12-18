<?php
// array = variable


$foods = array("apple", "orange", "banana", "coconut");
// $foods[0] = "pineapple"; //изменяет по индексу в массиве
//array_push($foods, "pinaapple", "kiwi"); //добавляет в конец массива
//array_pop($foods); //удаление последнего элемента в массиве
//array_shift($foods); //удаление в начале массива
// $foods = array_reverse($foods); - 
//echo count($foods); //показывает сколько элементов в массиве 



foreach($foods as $food){
    echo $food. "<br>";

}

?>