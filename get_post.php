<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get_post.php" method="post">
        <label>UserName:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="LOG IN">
    </form>
</body>

</html>

<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    echo "Username: " . $username . "<br>";
} else {
    echo "Username is not set.<br>";
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    echo "Password: " . $password . "<br>";
} else {
    echo "Password is not set.<br>";
}
?>
