<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <h2>Salary Calculator</h2>

    <form method="post">
        Basic Salary: <input type="number" name="basic_salary" step="0.01" required><br><br>
        Allowance: <input type="number" name="allowance" step="0.01" required><br><br>
        Deduction: <input type="number" name="deduction" step="0.01" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $basic_salary = $_POST['basic_salary'];
        $allowance = $_POST['allowance'];
        $deduction = $_POST['deduction'];

        $net_salary = $basic_salary + $allowance - $deduction;

        echo "<h3>Salary Details</h3>";
        echo "Basic Salary: ₱" . number_format($basic_salary, 2) . "<br>";
        echo "Allowance: ₱" . number_format($allowance, 2) . "<br>";
        echo "Deduction: ₱" . number_format($deduction, 2) . "<br>";
        echo "<b>Net Salary: ₱" . number_format($net_salary, 2) . "</b>";
    }
    ?>
</body>

</html>