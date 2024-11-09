<?php

// 1. Find the first character that is different between two strings
function findFirstDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference between two strings at position $i: \"{$str1[$i]}\" vs \"{$str2[$i]}\"";
        }
    }
    return "No difference found.";
}
echo findFirstDifference('dragonball', 'dragonboll') . "\n";

// 2. Put a string in an array and view it with var_dump
$string = "Twinkle, twinkle, little star.";
$array = explode(" ", $string);
var_dump($array);

// 3. Print the next letter of the inputted letter
function nextLetter($char) {
    if ($char === 'z') return 'a';
    return chr(ord($char) + 1);
}
echo nextLetter('a') . "\n"; // Expected Output: b
echo nextLetter('z') . "\n"; // Expected Output: a

// 4. Insert a string at the specified position in a given string
function insertString($original, $insert, $position) {
    return substr_replace($original, $insert . ' ', $position, 0);
}
echo insertString('The brown fox', 'quick', 4) . "\n"; // Output: The quick brown fox

// 5. Get the first word of a sentence
function getFirstWord($sentence) {
    $words = explode(" ", $sentence);
    return $words[0];
}
echo getFirstWord('The quick brown fox') . "\n"; // Output: The

// 6. Remove zeroes from a given number
function removeZeroes($number) {
    return ltrim($number, '0');
}
echo removeZeroes('0000657022.24') . "\n"; // Output: 65722.24

// 7. Remove part of a string
function removeWord($sentence, $word) {
    return str_replace($word, '', $sentence);
}
echo removeWord('The quick brown fox jumps over the lazy dog', 'fox ') . "\n"; // Output: The quick brown jumps over the lazy dog

// 8. Remove trailing dashes from a string
function removeTrailingDashes($string) {
    return rtrim($string, '-');
}
echo removeTrailingDashes('The quick brown fox jumps over the lazy dog---') . "\n"; // Output: The quick brown fox jumps over the lazy dog

// 9. Remove special characters from a string
function removeSpecialChars($string) {
    return preg_replace('/[^\d\s]/', ' ', $string);
}
echo removeSpecialChars('\"\1+2/3*2:2-3/4*3') . "\n"; // Output: 1 2 3 2 2 3 4 3

// 10. Select first 5 words from a string
function getFirstFiveWords($string) {
    $words = explode(' ', $string);
    return implode(' ', array_slice($words, 0, 5));
}
echo getFirstFiveWords('The quick brown fox jumps over the lazy dog') . "\n"; // Output: The quick brown fox jumps

// 11. Remove commas from a numeric string
function removeCommas($number) {
    return str_replace(',', '', $number);
}
echo removeCommas('2,543.12') . "\n"; // Output: 2543.12

// 12. Print letters from 'a' to 'z'
function printAlphabet() {
    foreach (range('a', 'z') as $letter) {
        echo $letter . ' ';
    }
    echo "\n";
}
printAlphabet(); // Output: a b c d e f g h i j k l m n o p q r s t u v w x y z

?>
