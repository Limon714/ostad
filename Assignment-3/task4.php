<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / count($grades);
        
        echo "Student: $student, Average Grade: $averageGrade\n";
    }
}

// Create a multidimensional array to store grades
$studentGrades = array(
    'Student1' => array('Math' => 94, 'English' => 92, 'Science' => 90),
    'Student2' => array('Math' => 85, 'English' => 90, 'Science' => 80),
    'Student3' => array('Math' => 85, 'English' => 82, 'Science' => 70)
);

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);
?>
