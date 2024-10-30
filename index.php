<?php

require_once "database/index.php";

$title = "Learn PHP from Scratch";

// prepare the query
$query = "SELECT * FROM posts";
// execute the query
$statement = $pdo->prepare($query);
$statement->execute();
// fetch all the results
$blogs = $statement->fetchAll();

// echo "<pre>";
// print_r($blogs);
// echo "</pre>";

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
        <?php foreach ($blogs as $blogPost): ?>
            <div class="bg-white rounded-lg shadow-md p-6 my-4">
                <a href="post.php?id=<?= $blogPost['id'] ?>">
                    <h1 class="text-xl font-semibold"><?= $blogPost['title'] ?></h1>
                    <p class="mt-4"><?= $blogPost['body'] ?></p>
                    <h3><?= $blogPost['author'] ?></h3>

                </a>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>