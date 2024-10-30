<?php

$title = "Learn PHP from Scratch";
$heading = "Welcome to the course";
// $body = "This is a simple course to learn php from scratch. We will cover all the basic concepts of php.";
/*
date and time
-Years: Y
-Months: m
-Days: d
-Weekday: D short name
-Full month name: F
-full day name: l
-Hours: H
-Minutes: i
-Seconds: s
-AM or PM: A
-24 hour format: H
-12 hour format: h

*/
$output = null;
$output = date("l, F j, Y");


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