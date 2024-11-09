<?php

// 1. Convert all strings in an array to lowercase
function convertToLowerCase($array) {
    return array_map('strtolower', $array);
}
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
print_r(convertToLowerCase($colors));
// Expected Output: Array ( [0] => red [1] => blue [2] => white [3] => yellow )


// 2. Display numbers between 200 and 250 that are divisible by 4
function numbersDivisibleByFour() {
    $result = [];
    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 === 0) {
            $result[] = $i;
        }
    }
    echo implode(",", $result) . "\n";
}
numbersDivisibleByFour();
// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248


// 3. Get the shortest and longest string length from an array
function findShortestAndLongestLength($array) {
    $lengths = array_map('strlen', $array);
    echo "The shortest array length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".\n";
}
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
findShortestAndLongestLength($words);
// Expected Output: The shortest array length is 1. The longest array length is 4.


// 4. Generate 10 unique random numbers within a specific range
function generateUniqueRandomNumbers($min, $max) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, 10);
}
print_r(generateUniqueRandomNumbers(11, 20));
// Expected Output: (Random unique numbers between 11 and 20)


// 5. Return the lowest integer in an array that is not 0
function findLowestNonZero($array) {
    $nonZeroValues = array_filter($array, fn($num) => $num !== 0);
    echo min($nonZeroValues) . "\n";
}
$array1 = array(2, 0, 10, 12, 6);
findLowestNonZero($array1);
// Expected Output: 2

?>
