<?php
function fibonacci($n) {
    $fibonacciSeries = [];
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];

        // Check if the current Fibonacci number is greater than 100
        if ($fibonacciSeries[$i] > 100) {
            break; // Break out of the loop
        }
    }

    return $fibonacciSeries;
}

// Calculate and print the first 10 Fibonacci numbers
$fibonacciSeries = fibonacci(10);
foreach ($fibonacciSeries as $number) {
    echo $number . " ";
}
?>
