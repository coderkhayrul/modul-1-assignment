<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Weather Report</title>
</head>

<body>

    
    <div class="container">
        <h1 class="text-center display-3">Weather Report</h1>


    <?php
    // Define variables and set default values
    $temperature = "";
    $message = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $temperature = $_POST["temperature"];

        // Determine the weather message based on temperature
        if ($temperature < 0) {
            $message = "It's freezing!";
        } elseif ($temperature >= 0 && $temperature < 15) {
            $message = "It's cold.";
        } elseif ($temperature >= 15 && $temperature < 25) {
            $message = "It's cool.";
        } elseif ($temperature >= 25 && $temperature < 35) {
            $message = "It's warm.";
        } else {
            $message = "It's hot!";
        }
    }
    ?>

        <form method="post" action="weather_report.php">
            <div class="row justify-content-center">
                <div class="col-8 my-3">
                    <label for="temperature">Enter Temperature (in Celsius):</label>
                    <input class="form-control" type="number" name="temperature" id="temperature" required value="<?php echo $temperature; ?>">
                </div>
                <div class="col-8 my-3">
                    <input class="btn btn-success" type="submit" value="Check Weather">
                </div>
                <div class="col-8 my-3">
                <?php
                    // Display the weather message
                    if ($message !== "") {
                        echo "<p><strong>Weather:</strong> $message</p>";
                    }
                ?>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>