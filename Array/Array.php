<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Array</title>
</head>
<body>
    <?php

// 1- Write a PHP script that will display the colors as unordered list :
$colors = array("white" , "green", "red");

sort($colors);
echo "<ul>";
foreach ($colors as $color){
echo "<li> $color</li>";}
echo "<ul>";

// 2- Create a PHP script to displays the capital and country name from the above array $cities. Sort the list
// by the capital of the country.



$cities= array(
"Italy"=>"Rome",
"Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels",
"Denmark"=>"Copenhagen",
"Finland"=>"Helsinki",
"France" => "Paris",
"Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana",
"Germany" => "Berlin",
"Greece" => "Athens",
"Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon",
"Spain"=>"Madrid" );

foreach ($cities as $city => $capital)
{
    echo"The capital of " .$city. " is " .$capital. "<br>";
}

// 3- Write a PHP script to display the first element of the above array
echo "<br>";
$color = array (4 => "white" , 6 => "green" , 11 => "red");
echo $color[4];
echo "<br>";

// 4- Write a PHP script that inserts a specific new item in an array in any position.
$insertsNew = array (1 , 2, 3, 4, 5);
array_splice($insertsNew , "3" , 0 , "$");
foreach ($insertsNew as $new)
{
    echo $new. " ";
}
echo "<br>";
// 5- . Write a PHP script to sort the following associative array depending on the key value [asc]
$fruits = array (
    "d" =>"lemon",
    "a" => "orange", 
    "b" => "banana" , 
    "c" => "apple"
);
asort ($fruits); 
foreach ( $fruits as $letter => $fruit)
{
echo $letter. " = " .$fruit. "<br>";
}
    ?>
</body>
</html>