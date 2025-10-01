<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle's Area and Perimeter</title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <?php
    $length = 10;
    $width = 5;

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Length: $length <br>";
    echo "Width: $width <br>";
    echo "Area of Rectangle: $area <br>";
    echo "Perimeter of Rectangle: $perimeter <br>";
    ?>

</body>

</html>