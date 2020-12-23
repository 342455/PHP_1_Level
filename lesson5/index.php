<?php

$link = null;
include "db.php";

$action = $_GET['action'];
if ($action == 'delete') {
    $id = (int)$_GET['id'];
    $result = mysqli_query($link, "DELETE FROM images WHERE id = {$id}");
    header("Location: /");
}

$result = mysqli_query($link, "SELECT * FROM `images` WHERE 1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>

<body>

    <div id="main">

        <div class="post_title"><h2>Gallery</h2></div>
        <div class="gallery">
            <?php while ($item = mysqli_fetch_assoc($result)): ?>

                <a href="img.php?id=<?= $item['id'] ?>">
                    <img src="gallery/small/<?=$item['name']?>" />
                </a><?=$item['likes']?>

            <? endwhile; ?>
        </div>

    </div>

</body>
</html>
