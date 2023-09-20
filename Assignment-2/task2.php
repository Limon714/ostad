<?php
echo " <h3>     Skip Multiples of 5  :      </h3> ";
?>
<?php
for ($i = 1; $i <= 50; $i++) {
    // Check if the current number is a multiple of 5
    if ($i % 5 == 0) {
        // Skip this iteration and continue to the next number
        continue;
    }
    
    // Print the current number
    echo $i . " ";
}
?>