<?php

if(isset($_COOKIE["user"]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated user.";
}
else
{
    setcookie("user", "visited", time() + 86400, "/");

    echo "<h2>Welcome!</h2>";
    echo "You are a new user. Cookie has been created.";
}
?>