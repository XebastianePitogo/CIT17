<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <?php
    $a = 5;
    $b = 10;

    echo "Before Swapping: a = $a, b = $b <br>";

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "After Swapping: a = $a, b = $b <br>";
    ?>

</body>

</html>