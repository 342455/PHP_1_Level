<?php
$link = null;
include "db.php";
$id = (int)$_GET['id'];
$result = mysqli_query($link, "UPDATE images SET likes=likes + 1 WHERE id= {$id}");
$result = mysqli_query($link, "SELECT * FROM images WHERE id= {$id}");
$item = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
</head>
<body>

    <div id="main">

        <div class="post_title"><h2>Gallery</h2></div>

            <a href="index.php">Главная</a>

        <div class="gallery">

            <img src="gallery/big/<?=$item['name']?>" /><?=$item['likes']?><br>

        </div>

    </div>

</body>
</html>
