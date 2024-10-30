<?php

$title = "Learn PHP from Scratch";
$heading = "Welcome to the course";
// $body = "This is a simple course to learn php from scratch. We will cover all the basic concepts of php.";
/*
ways to declare arrays
- $array = array("one", "two", "three");
- $array = ["one", "two", "three"];
how to add and delete elements from an array
- $array[] = "four";
- unset($array[0]);
how to access elements from an array
- $array[0];
- print_r($array);


*/
// $fruits = ["Apple", "Banana", "Orange", "Mango"];
$output = null;
// // add an element to an array
// $fruits[] = "Pineapple";
// // delete an element from an array
// unset($fruits[0]);
// foreach ($fruits as $fruit) {
//     $output .= $fruit . "<br>";
// }

// $output = $fruits[0] . "<br>" . $fruits[1];

// print_r($fruits);

/*
 array functions
    - count($array)
    - array_push($array, "element")
    - array_pop($array)
    - array_unshift($array, "element")
    - array_shift($array)
    - array_merge($array1, $array2)
    - array_slice($array, 1, 2)
    - array_splice($array, 1, 2)
    - array_search("element", $array)   
    - in_array("element", $array)
*/

$userIDs = [78, 25, 3454, 5644, 52]; // array of user ids
$userNames = ["John", "Doe", "Jane", "Doe", "Smith"]; // array of user names   
$output = count($userIDs);


array_push($userIDs, 100, 200, 300); // add elements to the end of the array

sort($userIDs); // sort the array in ascending order
array_pop($userIDs); // remove the last element from the array
array_shift($userIDs); // remove the first element from the array
array_unshift($userIDs, 1000); // add an element to the beginning of the array
array_slice($userIDs, 1, 2); // get a slice of the array
array_splice($userIDs, 1, 2, ['New ID1', 'New ID2']); // remove a slice of the array
$output = array_search(300, $userIDs); // search for an element in the array
$output = 'sum of ids: ' . array_sum($userIDs); // sum of all elements in the array

// explode and implode functions
$string = ['John', 'Doe', 'Jane', 'Doe', 'Smith'];
// $array_string = explode(", ", $string); // convert a string to an array
$string_array = implode(', ', $string); // convert an array to a string
var_dump($string_array);
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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>

            <pre> <?php print_r($userIDs); ?> </pre>

            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>

            <pre> <?php print_r($userNames); ?> </pre>

            </p>
        </div>
    </div>

</body>

</html>