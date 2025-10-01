<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <h2>Celsius to Fahrenheit Converter</h2>

    <form method="post">
        Enter Temperature in Celsius:
        <input type="number" name="celsius" step="0.01" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];

        $fahrenheit = ($celsius * 9 / 5) + 32;

        echo "<p>$celsius °C = $fahrenheit °F</p>";
    }
    ?>
</body>

</html>