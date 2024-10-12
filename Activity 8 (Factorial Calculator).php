<?php
function calculateFactorial($number) {
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$number = 5;
$result = calculateFactorial($number);

echo "Factorial of $number is: $result";
?>