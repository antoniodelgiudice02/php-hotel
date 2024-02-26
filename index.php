<?php

require_once './main.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <ul>
            <?php foreach($hotels as $hotel): ?>

                <li><?=$hotel['name']?></li>
                <li><?=$hotel['description']?></li>
                <li><?=$hotel['parking']?></li>
                <li><?=$hotel['vote']?></li>
                <li><?=$hotel['distance_to_center']?></li>

            <?php endforeach; ?>
        </ul>
    </div>
    
</body>
</html>