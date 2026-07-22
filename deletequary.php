<?php
    include "db.php";

    $sql = "DELETE FROM `users` WHERE  id=2";
    mysqli_query($conn,$sql);

    echo"record deleted";
?>