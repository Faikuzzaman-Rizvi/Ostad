<?php
function calculateResult($marks) {
    $totalMarks = 0;
    $numSubjects = count($marks); 

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) { 
            echo "Mark range is invalid. Please enter marks between 0 and 100.<br>";
            return;
        }
        if ($mark < 33) {
            echo "Student has failed because a subject mark is less than 33.<br>";
            return;
        }
        $totalMarks += $mark;
    }

   
    $averageMarks = $totalMarks / $numSubjects;

    
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F"; 
    }

    
    echo "Total Marks: " . $totalMarks . "<br>";
    echo "Average Marks: " . $averageMarks . "<br>";
    echo "Grade: " . $grade . "<br>";
}


$marks = [48, 45, 49, 43, 47]; 


calculateResult($marks);

?>
