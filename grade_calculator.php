<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Define variables and set default values
    $bangla = "";
    $english = "";
    $math = "";
    $average = "";
    $grade = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $bangla = $_POST["bangla"];
        $english = $_POST["english"];
        $math = $_POST["math"];

        // Calculate the average
        $average = ($bangla + $english + $math) / 3;

        // Determine the corresponding grade
        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
    }
    ?>

    <form method="post" action="grade_calculator.php">
        <label for="bangla">Bangla:</label>
        <input type="number" name="bangla" id="bangla" required value="<?php echo $bangla; ?>">
        
        <label for="english">English:</label>
        <input type="number" name="english" id="english" required value="<?php echo $english; ?>">
        
        <label for="math">Math:</label>
        <input type="number" name="math" id="math" required value="<?php echo $math; ?>">
        
        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    // Display the result
    if ($average !== "") {
        echo "<p><strong>Average Score:</strong> {$average}</p>";
        echo "<p><strong>Letter Grade:</strong> {$grade}</p>";
    }
    ?>
</body>
</html>
