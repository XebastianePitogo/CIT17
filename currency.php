<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
</head>
<body>
<li><a href="index.php">Go Back</a></li>
<h2>Currency Converter</h2>

<form method="post" action="">
    <label for="amount">Amount (PHP):</label><br>
    <input type="number" step="any" name="amount" id="amount" required><br><br>

    <label for="currency">Convert to:</label><br>
    <select name="currency" id="currency" required>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="JPY">JPY</option>
    </select><br><br>

    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = floatval($_POST['amount']);
    $currency = $_POST['currency'];

    $exchange_rates = [
        'USD' => 0.017,  
        'EUR' => 0.015,  
        'JPY' => 2.54 
    ];

    if (isset($exchange_rates[$currency])) {
        $converted_amount = $amount * $exchange_rates[$currency];
        echo "<h3>$amount PHP equals " . number_format($converted_amount, 2) . " $currency</h3>";
    } else {
        echo "<p style='color:red;'>Invalid currency selected.</p>";
    }
}
?>

</body>
</html>
