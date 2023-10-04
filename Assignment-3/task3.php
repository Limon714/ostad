<?php
function sortGradesDescending(&$grades) {
    rsort($grades); // Sort the array in descending order
}

// Create the array with grades
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort grades in descending order
sortGradesDescending($grades);

// Print the sorted grades as an array

echo "<pre>";
print_r($grades);
echo "</pre>";
?>
