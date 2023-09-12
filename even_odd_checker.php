<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h2>Even-Odd Checker</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    // Check if the form is submitted
    if(isset($_POST['check'])) {
        // Get the input number
        $number = $_POST['number'];

        // Check whether the number is even or odd
        if ($number % 2 == 0) {
            $result = "Even";
        } else {
            $result = "Odd";
        }

        // Display the result
        echo "<h3>Result:</h3>";
        echo "The number $number is $result.";
    }
    ?>
</body>
</html>
