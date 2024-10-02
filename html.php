<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Hello World Saikat</h1>

    <?php 
        echo "Another Line";
     ?>

     <ul>
        <?php
            for ($i=1; $i <= 2000; $i++) {
                echo "<li>Item <hr> $i</li>";
            }
        ?>
     </ul>
</body>
</html>