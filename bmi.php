<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI calculator</title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <h2>BMI Calculator</h2>

    <form method="post">
        Weight (kg): <input type="number" name="weight" step="0.1" required><br><br>
        Height (m): <input type="number" name="height" step="0.01" required><br><br>
        <input type="submit" value="Calculate BMI">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        $bmi = $weight / ($height * $height);

        echo "<h3>Result</h3>";
        echo "Weight: $weight kg<br>";
        echo "Height: $height m<br>";
        echo "Your BMI is: " . number_format($bmi, 2) . "<br>";

        if ($bmi < 18.5) {
            echo "Category: Underweight";
        } elseif ($bmi < 24.9) {
            echo "Category: Normal weight";
        } elseif ($bmi < 29.9) {
            echo "Category: Overweight";
        } else {
            echo "Category: Obese";
        }
    }
    ?>
</body>

</html>