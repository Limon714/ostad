<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h2>Weather Report</h2>
    <form method="get" action="">
        <label for="temperature">Enter temperature (in °C):</label>
        <input type="text" name="temperature" required>
        <input type="submit" value="Check">
    </form>
    <?php
    // Function to determine the weather message based on temperature
    function getWeatherMessage($temperature) {
        if ($temperature <= 0) {
            return "It's freezing!";
        } elseif ($temperature <= 15) {
            return "It's cool.";
        } elseif ($temperature <= 25) {
            return "It's warm.";
        } else {
            return "It's hot!";
        }
    }

    // Check if the temperature is provided as a query parameter
    if(isset($_GET['temperature'])) {
        $input_temperature = $_GET['temperature'];

        // Check if the input is a valid number
        if (is_numeric($input_temperature)) {
            $weather_message = getWeatherMessage($input_temperature);
            echo "<p>Temperature: $input_temperature°C</p>";
            echo "<p>$weather_message</p>";
        } else {
            echo "<p>Please enter a valid numeric temperature.</p>";
        }
    }
    ?>
    
  
</body>
</html>
