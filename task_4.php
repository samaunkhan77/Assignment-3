<?php

function claculateAverageGrades($studentsGrades){
    foreach ($studentsGrades as $student => $grade){
        $totalGrades = array_sum($grade);
        $averageGrade = $totalGrades / count($grade);
        echo "Average grade for $student is $averageGrade \n";
    }
}

$studentsGrades = [
    'student1' => ['Math' =>88 , 'English' => 90 ,'Science' => 92],
    'student2' => ['Math' => 75 , 'English' => 95 ,'Science' => 85],
    'student3' => ['Math' => 68 , 'English' => 70 ,'Science' => 72],
    'student4' => ['Math' => 98 , 'English' => 80 ,'Science' => 92],
];

claculateAverageGrades($studentsGrades);

?>