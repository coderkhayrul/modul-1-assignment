<!-- Task 2: Temperature Converter -->

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Define variables and set default values
    $temperature = "";
    $conversion = "celsius_to_fahrenheit";
    $result = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        // Perform the temperature conversion
        if ($conversion == "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32;
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9;
        }
    }
    ?>

    <form method="post" action="temperature_converter.php">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required value="<?php echo $temperature; ?>">
        
        <label for="conversion">Conversion:</label>
        <select name="conversion" id="conversion">
            <option value="celsius_to_fahrenheit" <?php if ($conversion == "celsius_to_fahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius" <?php if ($conversion == "fahrenheit_to_celsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the result
    if ($result !== "") {
        echo "<p><strong>Result:</strong> ";
        echo ($conversion == "celsius_to_fahrenheit") ? "{$temperature} &deg;C = {$result} &deg;F" : "{$temperature} &deg;F = {$result} &deg;C";
        echo "</p>";
    }
    ?>
</body>
</html>