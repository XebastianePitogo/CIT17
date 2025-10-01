<!DOCTYPE html>
<html>
<head>
    <title>Simple Grading System</title>
</head>
<body>
<li><a href="index.php">Go Back</a></li>
<h2>Simple Grading System</h2>

<form method="post" action="">
    <label for="math">Math Score:</label><br>
    <input type="number" name="math" id="math" min="0" max="100" required><br><br>

    <label for="english">English Score:</label><br>
    <input type="number" name="english" id="english" min="0" max="100" required><br><br>

    <label for="science">Science Score:</label><br>
    <input type="number" name="science" id="science" min="0" max="100" required><br><br>

    <input type="submit" value="Calculate Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $math = floatval($_POST['math']);
    $english = floatval($_POST['english']);
    $science = floatval($_POST['science']);

    $average = ($math + $english + $science) / 3;

    if ($average >= 90) {
        $grade = "Deans Lister";
    } elseif ($average >= 80) {
        $grade = "Average";
    } elseif ($average >= 70) {
        $grade = "OSAS!";
    } else {
        $grade = "Expelled!";
    }

    echo "<h3>Average Score: " . number_format($average, 2) . "</h3>";
    echo "<h3>Grade: $grade</h3>";
}
?>

</body>
</html>
