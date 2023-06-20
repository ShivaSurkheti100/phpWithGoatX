
<!DOCTYPE html>
<html lang="en">
<body>
<h1 style="color: #ef6a33">
<?php
// Control Structures (if, else, elseif, else if) :: elsei or else if : more or less same
$score = 57;

if ($score >= 90) {
    echo 'A';
    // Nested if
    if($score >= 95){
        echo "+";
    }
} elseif ($score >= 80) {
    echo "B";
    if ($score>= 85){
        echo "+";
    }
} elseif ($score >= 70) {
    echo "C";
    if ($score >= 75){
        echo "+";
    }
} elseif ($score >= 60) {
    echo "D";
    if ($score>=65){
        echo "+";
    }
} elseif ($score >= 50) {
    echo "E";
    if ($score>=55){
        echo "-";
    }
} else {
    echo "F";
}
?>
</h1>
</body>
</html>
