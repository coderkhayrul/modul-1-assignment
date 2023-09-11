<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even Odd Checker</h1>

    <?php
    // Define variables and set default values
    $number = "";
    $result = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "Even";
        } else {
            $result = "Odd";
        }
    }
    ?>

    <form method="post" action="even_odd_checker.php">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required value="<?php echo $number; ?>">
        
        <input type="submit" value="Check">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Result:</strong> The number {$number} is {$result}.</p>";
    }
    ?>
</body>
</html>