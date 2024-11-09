<?php
// 1. Write PHP to check if the sum of the two given numbers equals 30
// Sample Input: [ firstInteger => 10 , secondInteger => 10]
// Sample Output: ‘false’

function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    return $sum === 30 ? $sum : false;
}

echo checkSum(10, 10) . "\n"; // Output: false


// 2. Write a PHP script to check if the given positive number is a multiple of 3
// Sample Input: number = 20
// Sample Output: ‘false’

function isMultipleOfThree($number) {
    return $number % 3 === 0 ? "true" : "false";
}

echo isMultipleOfThree(20) . "\n"; // Output: false


// 3. Write a PHP script to check if the integer value is in the range of [20-50] inclusive
// Sample Input: number = 50
// Sample Output: ‘true’

function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? "true" : "false";
}

echo isInRange(50) . "\n"; // Output: true


// 4. Write PHP script to find the largest number between the three integers
// Sample Input: [1, 5, 9]
// Sample Output: 9

function findLargest($a, $b, $c) {
    return max($a, $b, $c);
}

echo findLargest(1, 5, 9) . "\n"; // Output: 9


// 5. Write PHP script to calculate the monthly electricity bill
// Rates:
// a. For first 50 units – 2.50 JOD/Unit
// b. For next 100 units – 5.00 JOD/Unit
// c. For next 100 units – 6.20 JOD/Unit
// d. For units above 250 – 7.50 JOD/Unit

function calculateElectricityBill($units) {
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }
    return $bill;
}

echo calculateElectricityBill(280) . " JOD\n";


// 6. Write PHP script to make a calculator with four main operations: Addition, Subtraction, Multiplication, Division

function calculator($a, $b, $operation) {
    switch ($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            return $b != 0 ? $a / $b : "Division by zero error";
        default:
            return "Invalid operation";
    }
}

echo calculator(10, 5, 'add') . "\n";
echo calculator(10, 5, 'subtract') . "\n";
echo calculator(10, 5, 'multiply') . "\n";
echo calculator(10, 5, 'divide') . "\n";


// 7. Write PHP script to check if a person is eligible to vote, minimum age required for voting is 18
// Sample Input: 15
// Sample Output: ‘is not eligible to vote’

function checkVotingEligibility($age) {
    return $age >= 18 ? "is eligible to vote" : "is not eligible to vote";
}

echo checkVotingEligibility(15) . "\n";


// 8. Write PHP script to check whether a number is positive, negative or zero
// Sample Input: -60
// Sample Output: ‘Negative’

function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

echo checkNumber(-60) . "\n";


// 9. Write a PHP script to find the grade for the student based on average score
// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

function findGrade($scores) {
    $average = array_sum($scores) / count($scores);
    if ($average >= 90) return "A";
    elseif ($average >= 80) return "B";
    elseif ($average >= 70) return "C";
    elseif ($average >= 60) return "D";
    else return "F";
}

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo findGrade($scores) . "\n"; // Output: D

// 1. Display numbers from 1 to 10 on one line separated by dashes
// Expected Output: 1-2-3-4-5-6-7-8-9-10

function displayNumbers() {
    echo implode('-', range(1, 10)) . "\n";
}

displayNumbers();


// 2. Create a script using a for loop to add all integers between 0 and 30 and display the total
// Expected Output: total as a number

function sumIntegers() {
    $total = 0;
    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }
    echo "Total: " . $total . "\n";
}

sumIntegers();
?>
