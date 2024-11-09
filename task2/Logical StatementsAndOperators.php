
<?php

// 1. Check if the specified year is a leap year
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "This year is a leap year\n";
    } else {
        echo "This year is not a leap year\n";
    }
}
isLeapYear(2013); // Output: This year is not a leap year

// 2. Check the season depending on the temperature
function checkSeason($temperature) {
    if ($temperature < 20) {
        echo "It is wintertime!\n";
    } else {
        echo "It is summertime!\n";
    }
}
checkSeason(27); // Output: It is summertime!

// 3. Calculate the sum of two integers, if they are the same, return triple the sum
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($firstInteger === $secondInteger) {
        $result = $sum * 3;
        echo "( $firstInteger + $secondInteger ) * 3 = $result\n";
    } else {
        echo "Sum: $sum\n";
    }
}
calculateSum(2, 2); // Output: ( 2 + 2 ) * 3 = 12
calculateSum(3, 4); // Output: Sum: 7

?>
