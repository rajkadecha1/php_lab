<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br></br>
        <input type="submit" value="upload image" name="upload">
    </form>
</body>
</html>
<?php
    if(isset($_POST['upload'])){

       $image = $_FILES['image'];
       $oriname = $image['name'];
       $tempname = $image['tmp_name'];
       $file = "uploads/".$oriname;

       if(!is_dir("uploads"))
        {
            mkdir("uploads");
        }
        if(move_uploaded_file($tempname,$file)){
            echo "image upload successfully";
            echo "<img src='$file' width='300'>";
        }
    }
?>