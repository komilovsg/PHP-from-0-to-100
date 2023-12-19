<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {



    // $username = filter_input(INPUT_POST, "username",
    //                             FILTER_SANITIZE_SPECIAL_CHARS);

    // $age = filter_input(INPUT_POST, "age",
    //                             FILTER_SANITIZE_NUMBER_INT);

    // $email = filter_input(INPUT_POST, "email",
    //                             FILTER_SANITIZE_EMAIL);

    // echo "Your email: {$email} is true";
    // TIME 2:50:52


    $age = filter_input(INPUT_POST,"age",
                        FILTER_VALIDATE_INT); 
                        // эта функция принимает только числа, если ввести буквы, символы,
                        // автоматикали не примет, выводит логическое сообщение

    $email = filter_input(INPUT_POST,"email",
                        FILTER_VALIDATE_EMAIL); 

                if(empty($email)){
                    echo "That email wasn`t valid";
                } else {
                    echo "Your email is: {$email} <br>"; // it`s work ---- два варианта написания
                    echo "Your email is: $email"; // it`s work ---- два варианта написания
                }
}

?>