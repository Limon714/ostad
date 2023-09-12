<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required>

        <label for="operation">Select operation:</label>
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if(isset($_POST['calculate'])) {
        // Get the input numbers and operation
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Perform the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                $operation_symbol = '+';
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $operation_symbol = '-';
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $operation_symbol = '*';
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $operation_symbol = '/';
                } else {
                    $result = "Cannot divide by zero!";
                    $operation_symbol = '';
                }
                break;
            default:
                $result = "Invalid operation selected!";
                $operation_symbol = '';
                break;
        }

        // Display the result
        echo "<h3>Result:</h3>";
        echo "$num1 $operation_symbol $num2 = $result";
    }
    ?>
</body>
</html>
