<!DOCTYPE html>
<html>
<head>
    <title>Travel Cost Estimator</title>
</head>
<body>
<li><a href="index.php">Go Back</a></li>
<h2>Travel Cost Estimator</h2>
<form method="post" action="">
    <label for="distance">Distance (km):</label><br>
    <input type="number" step="any" name="distance" id="distance" required><br><br>

    <label for="fuel_consumption">Fuel Consumption (km per liter):</label><br>
    <input type="number" step="any" name="fuel_consumption" id="fuel_consumption" required><br><br>

    <label for="fuel_price">Fuel Price (per liter):</label><br>
    <input type="number" step="any" name="fuel_price" id="fuel_price" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = floatval($_POST['distance']);
    $fuel_consumption = floatval($_POST['fuel_consumption']);
    $fuel_price = floatval($_POST['fuel_price']);

    if ($fuel_consumption > 0) {
        $fuel_needed = $distance / $fuel_consumption;
        $travel_cost = $fuel_needed * $fuel_price;

        echo "<h3>Estimated Travel Cost: " . number_format($travel_cost, 2) . " PHP</h3>";
    } else {
        echo "<p style='color:red;'>Fuel consumption must be greater than zero.</p>";
    }
}
?>

</body>
</html>
