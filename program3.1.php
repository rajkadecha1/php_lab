

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        username:
        <input type="text" name="username"><br><br>
        password:
        <input type="password" name="password"><br><br> 
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        setcookie("username",$username,time()+86400,"/");
    }
?>