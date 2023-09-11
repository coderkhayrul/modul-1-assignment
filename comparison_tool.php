<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <?php
    // Define variables and set default values
    $number1 = "";
    $number2 = "";
    $result = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $result = ($number1 > $number2) ? $number1 : $number2;
    }
    ?>

    <form method="post" action="comparison_tool.php">
        <label for="number1">Enter Number 1:</label>
        <input type="number" name="number1" id="number1" required value="<?php echo $number1; ?>">
        
        <label for="number2">Enter Number 2:</label>
        <input type="number" name="number2" id="number2" required value="<?php echo $number2; ?>">
        
        <input type="submit" value="Compare">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Larger Number:</strong> $result</p>";
    }
    ?>
</body>
</html>