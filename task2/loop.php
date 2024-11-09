<?php

// 1. Calculate and print the Fibonacci sequence using a for loop
function fibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    echo implode(", ", $fibonacci) . "\n";
}
fibonacci(10); // Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34

// 2. Count the "c" characters in the text "Orange Coding Academy"
function countCharacterC($text) {
    return substr_count(strtolower($text), 'c');
}
echo "Count of 'c': " . countCharacterC("Orange Coding Academy") . "\n"; // Output: 2

// 3. Repeat integers from 1 to 50, print "Fizz" for multiples of 3, "Buzz" for multiples of 5, "FizzBuzz" for multiples of both
function fizzBuzz() {
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
    }
    echo "\n";
}
fizzBuzz();

// 4. Generate and display the first n lines of a Floyd triangle
function floydTriangle($lines) {
    $num = 1;
    for ($i = 1; $i <= $lines; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num++ . " ";
        }
        echo "\n";
    }
}
floydTriangle(5);

// 5. Print the following pattern
function alphabetPattern($rows) {
    // Top half
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "\n";
    }
    // Bottom half
    for ($i = $rows - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "\n";
    }
}
alphabetPattern(5);

?>
