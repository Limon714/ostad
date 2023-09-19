<?php
function printFibonacci($numTerms) {
    $fibonacciSeries = [];
    $fibonacciSeries[0] = 0;
    $fibonacciSeries[1] = 1;

    echo "Fibonacci Series for the first $numTerms terms: ";

    for ($i = 2; $i < $numTerms; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }

    // Print the Fibonacci series
    for ($i = 0; $i < $numTerms; $i++) {
        echo $fibonacciSeries[$i] . " ";
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>
