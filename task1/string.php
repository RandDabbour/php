<?php
// 1a. Convert the entered string to uppercase
function toUpperCase($string) {
    return strtoupper($string);
}
echo toUpperCase("hello world") . "\n"; // Output: HELLO WORLD

// 1b. Convert the entered string to lowercase
function toLowerCase($string) {
    return strtolower($string);
}
echo toLowerCase("HELLO WORLD") . "\n"; // Output: hello world

// 1c. Make the first letter of the string uppercase
function capitalizeFirstLetter($string) {
    return ucfirst($string);
}
echo capitalizeFirstLetter("hello world") . "\n"; // Output: Hello world

// 1d. Make the first letter of each word capitalized
function capitalizeWords($string) {
    return ucwords($string);
}
echo capitalizeWords("hello world") . "\n"; // Output: Hello World


// 2. Split the numeric string to be a date format
// Sample Output: '085119' => Expected Output: '08:51:19'

function formatTime($numericString) {
    return substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2);
}
echo formatTime("085119") . "\n"; // Output: 08:51:19


// 3. Check whether the sentence contains a specific word
// Sample Output: ‘I am a full stack developer at orange coding academy’
// Sample Word: ‘Orange’

function containsWord($sentence, $word) {
    return stripos($sentence, $word) !== false ? "Word Found!" : "Word Not Found!";
}
echo containsWord("I am a full stack developer at orange coding academy", "Orange") . "\n"; // Output: Word Found!


// 4. Extract the file name from the URL
// Sample Output: 'www.orange.com/index.php' => Expected Output: 'index.php'

function getFileNameFromURL($url) {
    return basename($url);
}
echo getFileNameFromURL("www.orange.com/index.php") . "\n"; // Output: index.php


// 5. Extract the username from the email address
// Sample Output: 'info@orange.com' => Expected Output: 'info'

function getUsernameFromEmail($email) {
    return strstr($email, '@', true);
}
echo getUsernameFromEmail("info@orange.com") . "\n"; // Output: info


// 6. Get the last three characters from the string
// Sample Output: 'info@orange.com' => Expected Output: 'com'

function getLastThreeCharacters($string) {
    return substr($string, -3);
}
echo getLastThreeCharacters("info@orange.com") . "\n"; // Output: com


// 7. Generate a simple random password from a given string
// Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'

function generateRandomPassword($length = 8) {
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $password = '';
    $maxIndex = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $maxIndex)];
    }
    return $password;
}
echo generateRandomPassword() . "\n"; // Example Output: '254ABCc' or 'h242sfeD'


// 8. Replace the first word of the sentence with another word
// Sample Output: 'That new trainee is so genius.' with replacement word 'Our'
// Expected Result: 'Our new trainee is so genius.'

function replaceFirstWord($sentence, $newWord) {
    return preg_replace('/^\w+/', $newWord, $sentence);
}
echo replaceFirstWord("That new trainee is so genius.", "Our") . "\n"; // Output: Our new trainee is so genius.
?>
