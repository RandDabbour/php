<?php
// 1. Write a PHP script to check if the inserted number is a prime number
// Sample Input: 3
// Expected Output: 3 is a prime number

function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$input = 3;
if (isPrime($input)) {
    echo "$input is a prime number\n";
} else {
    echo "$input is not a prime number\n";
}


// 2. Write a PHP script to reverse a string
// Sample Input: remove
// Expected Output: evomer

function reverseString($str) {
    return strrev($str);
}

echo reverseString("remove") . "\n";


// 3. Write a PHP function to swap two variables
// Sample Input: x = 12 y = 10
// Expected Output: y = 12 x = 10

function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12;
$y = 10;
swap($x, $y);
echo "x = $x, y = $y\n";


// 4. Write a PHP function to check if a number is an Armstrong number or not
// **Armstrong number is a number that is equal to the sum of cubes of its digits.
// Sample Input: 407
// Expected Output: 407 is Armstrong Number

function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = (int)($temp / 10);
    }
    return $sum == $num;
}

$armstrongInput = 407;
if (isArmstrong($armstrongInput)) {
    echo "$armstrongInput is an Armstrong Number\n";
} else {
    echo "$armstrongInput is not an Armstrong Number\n";
}


// 5. Write a PHP function that checks whether a passed string is a palindrome or not
// Sample Input: Eva, can I see bees in a cave?
// Expected Output: Yes it is a palindrome

function isPalindrome($str) {
    // Remove non-alphanumeric characters and make lowercase
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    return $str === strrev($str);
}

$palindromeInput = "Eva, can I see bees in a cave?";
if (isPalindrome($palindromeInput)) {
    echo "Yes, it is a palindrome\n";
} else {
    echo "No, it is not a palindrome\n";
}


// 6. Write a PHP function to remove duplicates from an array
// Sample Input:
// $array1 = array(2, 4, 7, 4, 8, 4);
// Expected Output:
// $array1 = array(2, 4, 7, 8);

function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);
print_r($array1);
?>
