<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<li><a href="index.php">Go Back</a></li>
<body>
    <?php
    $a = 15;
    $b = 5;

    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;

    if ($b != 0) {
        $quotient = $a / $b;
    } else {
        $quotient = "Undefined (division by zero)";
    }

    echo "For numbers a = $a and b = $b:<br>";
    echo "Sum: $sum<br>";
    echo "Difference: $difference<br>";
    echo "Product: $product<br>";
    echo "Quotient: $quotient<br>";
    ?>
</body>

</html>