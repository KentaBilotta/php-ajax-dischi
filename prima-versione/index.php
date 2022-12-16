<?php
    include_once "api-dischi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
            <?php 
                foreach ($dischi as $disco) {
                    ?> 
                    <div class="card">
                        <img class="image" src="<?= $disco["poster"] ?>" alt="">
                        <h3><?= $disco["title"] ?></h3>
                        <p><?= $disco["author"] ?></p>
                        <p><?= $disco["year"] ?></p>
                    </div>
                    <?php
                } 
            ?>
    </div>
    
</body>
</html>