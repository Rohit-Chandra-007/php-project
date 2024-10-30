<?php

// Single Line Comment
// echo "Hello from PHP";
// echo "<br>";
// print "Hello from print function in PHP";

use function PHPSTORM_META\map;

$title = "Learn PHP from Scratch";
$heading = "Welcome to the course";
// $body = "This is a simple course to learn php from scratch. We will cover all the basic concepts of php.";

$output = null;

// built in string functions
$string = "HelloWorld";
$string2 = "helloworld";
$output = strlen($string);
$output = strtoupper($string);
$output = strtolower($string);
$output = ucwords($string);
$output = str_replace("World", "PHP", $string);
$output = substr($string, 6);
$output = substr($string, 2, 5);
$output = strpos($string, "o");
$output = trim("    Hello World    ");
$output = isset($string);
$output = str_word_count($string);
$output = strrev($string);
$output = str_shuffle($string);
$output = strcmp($string, $string2);
$output = strcasecmp($string, $string2);
$output = strstr($string, "World");
$email  = 'name@example.com';
// $domain = strstr($email, '@');
// echo $domain; // prints @example.com

// $user = strstr($email, '@', true);
// echo $user; // prints name


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title ?></h1>
        </div>
    </header>

    <div class=" container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- <h2 class="text-2xl"><?= $heading ?></h2> -->
            <p class="text-gray-600"><?= $output ?></p>
        </div>
    </div>

</body>

</html>