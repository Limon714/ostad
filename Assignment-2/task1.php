<?php
echo " <h3>     Using For Loop  :      </h3> ";
?>
<?php
function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start + 1; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}



// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersForLoop(1, 20, 2);
?>
<?php
echo " <h3>     Using While Loop     :   </h3> ";
?>
<?php


function printEvenNumbersWhileLoop($start, $end, $step) {
    $i = $start +1;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersWhileLoop(1, 20, 2);
?>

<?php
echo " <h3>     Using do - while Loop     :   </h3> ";
?>

<?php
function printEvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start + 1;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersDoWhileLoop(1, 20, 2);
?>
