<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" required>

        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" required>

        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" required>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if(isset($_POST['calculate'])) {
        // Get input test scores
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the corresponding letter grade
        if ($average >= 70) {
            $grade = 'A';
        } elseif ($average >= 60) {
            $grade = 'B';
        } elseif ($average >= 50) {
            $grade = 'C';
        } elseif ($average >= 40) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        // Display the results
        echo "<h3>Results:</h3>";
        echo "Average Score: " . number_format($average, 2) . "<br>";
        echo "Letter Grade: " . $grade;
    }
    ?>
</body>
</html>
