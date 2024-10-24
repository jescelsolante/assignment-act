<?php
function calculate($a, $b, $operation) {
    switch ($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            return ($b != 0) ? $a / $b : "Division by zero error";
        default:
            return "Invalid operation";
    }
}

$num1 = 10;
$num2 = 5;
$operation = 'multiply'; // Change to add, subtract, divide, or multiply

echo "Result of $operation between $num1 and $num2 is: " . calculate($num1, $num2, $operation);
?>
