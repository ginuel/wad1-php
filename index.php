<? // variables
$message = "Hello World";
$hello = "Hello";
?>

<? // display
echo $message;
echo $hello;
?>
<br>

<? // concatenation
$name = "Ginuel";
echo $hello . " " . $name;
?>
<br>

<? // conditionals
$age = 20;
if ($age >= 18) {
    echo "Adult";
} else {
    echo "Minor";
}
?>
<br>

<? // loop
for ($i = 1; $i <= 5; $i++) {
    echo "<p>Student $i</p>";
}
?>
<br>

<? // function
function greet($name) {
    return "Hello, " . $name;
}
echo greet("Maria");
?>
<br>

<? // challenge: function "iterate"
function iterate($num) {
    for ($i = 1; $i <= $num; $i++) {
        echo $i . " ";
        // echo "<p>$i</p>";
    }
}
iterate(100);
?>
<br>






<?php
// 
// Dynamic Student Grade Calculator
// 

$studentName = "Juan";
$score = 82;

// 04: Code Organization
function evaluate_grade($score) {
    // 05: Edge Case Discussion
    if ($score < 0 || $score > 100) {
        return "Invalid Input: Score can only be between 0 and 100!";
    }

    // 03: Multi-Grade Challenge
    // Excellent (>= 95), Very Good (>= 90), Good (>= 85), Bad (>= 80), Very Bad (>= 75), Failed (>= 0)
		$comment = "";
    if ($score >= 95) {
        $comment = "Excellent";
    } else if ($score >= 90) {
        $comment = "Very Good";
    } else if ($score >= 85) {
        $comment = "Good";
    } else if ($score >= 80) {
        $comment = "Bad";
    } else if ($score >= 75) {
        $comment = "Very Bad";
    } else if ($score >= 70) {
        $comment = "Worst";
		}

    // 02: If-else Logic
		if ($score >= 85) {
			$status = "Passed";
		} else {
			$status = "Failed";
		}

		return "$status - '$comment'";
}

// 01: Display Information
echo "<section style='border: black 3px solid; width: 500px; padding: 10px;'>";

echo "<h2> Dynamic Student Grade Calculator </h2>";
echo "<p>Name: <strong>" . $studentName . "</strong></p>";
echo "<p>Score: <strong>" . $score . "</strong></p>";
echo "<p>Evaluation: <strong>" . evaluate_grade($score) . "</strong></p>";

echo "</section>";
?>
