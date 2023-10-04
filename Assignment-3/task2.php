<?php
function removeEvenNumbers(&$numbers) {
    $numbers = array_filter($numbers, function($value) {
        return $value % 2 != 0;
    });
}

// Create the array with numbers from 1 to 10
$numbers = range(1, 10);

// Call the function to remove even numbers
removeEvenNumbers($numbers);

// Print the resulting array
echo "<pre>";
print_r($numbers);
echo "</pre>";
?>
