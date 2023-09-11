<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Simple Calculator</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center">Simple Calculator</h1>


        <?php
    // Define variables and set default values
    $num1 = "";
    $num2 = "";
    $operation = "";
    $result = "";

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Perform the selected operation
        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero is not allowed.";
                }
                break;
            default:
                $result = "Invalid operation selected.";
        }
    }
    ?>

        <form method="post" action="simple_calculator.php">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center my-3">
                    <label for="num1">Enter Number 1:</label>
                    <input class="form-control" type="number" name="num1" id="num1" required
                        value="<?php echo $num1; ?>">
                </div>
                <div class="col-md-8 text-center my-3">
                    <label for="num2">Enter Number 2:</label>
                    <input class="form-control" type="number" name="num2" id="num2" required
                        value="<?php echo $num2; ?>">
                </div>
                <div class="col-md-8 text-center my-3">
                    <label for="operation">Select Operation:</label>
                    <select class="form-control" name="operation" id="operation">
                        <option value="addition" <?php if ($operation == "addition") echo "selected"; ?>>Addition
                        </option>
                        <option value="subtraction" <?php if ($operation == "subtraction") echo "selected"; ?>>
                            Subtraction</option>
                        <option value="multiplication" <?php if ($operation == "multiplication") echo "selected"; ?>>
                            Multiplication
                        </option>
                        <option value="division" <?php if ($operation == "division") echo "selected"; ?>>Division
                        </option>
                    </select>
                </div>
                <div class="col-md-8 text-center my-3">
                    <input class="btn btn-success" type="submit" value="Calculate">
                </div>
                <div class="col-md-8 text-center my-3">
                    <label for="result">Result:</label>
                    <input class="form-control" type="text" name="result" id="result" disabled
                        value="<?php echo $result; ?>">
                </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>