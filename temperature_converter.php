<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="POST" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion">
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];
        
        if ($conversion == "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32;
            echo "<p>$temperature &deg;C is equal to $result &deg;F</p>";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9;
            echo "<p>$temperature &deg;F is equal to $result &deg;C</p>";
        }
    }
    ?>
</body>
</html>
