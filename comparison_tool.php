<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h2>Comparison Tool</h2>
    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" required>

        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" required>

        <input type="submit" name="compare" value="Compare">
    </form>

    <?php
    // Check if the form is submitted
    if(isset($_POST['compare'])) {
        // Get the input numbers
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        // Use the ternary operator to determine the larger number
        $larger_number = ($number1 > $number2) ? $number1 : $number2;

        // Display the result
        echo "<h3>Result:</h3>";
        echo "The larger number is: $larger_number";
    }
    ?>
</body>
</html>
