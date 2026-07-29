<?php

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    if($username == "admin" && $password == "1234")
    {
        if(isset($_POST["remember"]))
        {
           
            setcookie("username", $username, time()+86400, "/");
            setcookie("password", $password, time()+86400, "/");
        }
        else
        {
           
            setcookie("username", "", time()-3600, "/");
            setcookie("password", "", time()-3600, "/");
        }

        echo "<h3>Login Successful!</h3>";
    }
    else
    {
        echo "<h3>Invalid Username or Password!</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username"
    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
    <br><br>

    Password:
    <input type="password" name="password"
    value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
    <br><br>

    <input type="checkbox" name="remember"
    <?php if(isset($_COOKIE['username'])) echo "checked"; ?>>
    Remember Me
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>