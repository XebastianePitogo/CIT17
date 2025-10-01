<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <h2>Bank Account Simulation</h2>

    <form method="post">
        Initial Balance: <input type="number" name="balance" step="0.01" required><br><br>
        Deposit Amount: <input type="number" name="deposit" step="0.01" required><br><br>
        Withdraw Amount: <input type="number" name="withdraw" step="0.01" required><br><br>
        <input type="submit" value="Update Balance">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $balance = $_POST['balance'];
        $deposit = $_POST['deposit'];
        $withdraw = $_POST['withdraw'];

        $final_balance = $balance + $deposit - $withdraw;

        echo "<h3>Transaction Summary</h3>";
        echo "Initial Balance: " . number_format($balance, 2) . " PHP<br>";
        echo "Deposit: " . number_format($deposit, 2) . " PHP<br>";
        echo "Withdraw: " . number_format($withdraw, 2) . " PHP<br>";
        echo "<b>Final Balance: " . number_format($final_balance, 2) . " PHP</b>";
    }
    ?>
</body>

</html>