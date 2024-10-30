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

// built in maths functions

// $output = rand(1, 100);
// $output = getrandmax();
// $output = pow(2, 3);
// $output = sqrt(16);
// $output = ceil(4.6);
// $output = floor(4.6);
// $output = round(4.2);
// $output = abs(-4.2);
$output = max(1, 2, 3, 4, 5);
$output = min([-100, 2, 3, 4, 5]);
$output = is_numeric("shubham");
$output = is_numeric(123);
$output = number_format(123562572.676676573513, 5, '.', ',');

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