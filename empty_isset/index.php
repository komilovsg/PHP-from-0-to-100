<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">username</label>
        <input type="text" name="username"><br><br>
        <label for="">password</label>
        <input type="possword" name="password"><br><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
    // PHP functions
    // isset() = Returns TRUE if variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, " "

    // $username = "User Name";

    // if(empty($username)){
    //     echo "The variable is empty";
    // }
    // else {
    //     echo "The variable is NOT empty";
    // }

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }

        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(empty($username)){
                echo "Username is missing";
            }
            elseif(empty($password)){
                echo "Password is missing";
            }
            else{
                echo "Hello {$username}";
            }
        }
        
?>