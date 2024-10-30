<?php
require "database/index.php";
$id = $_GET['id'];
if (!isset($id)) {
    header("Location: index.php");
    exit;
}
$sql = "SELECT * FROM posts WHERE id = :id";
$statement = $pdo->prepare($sql);
$params = ['id' => $id];
$statement->execute($params);
$post = $statement->fetch();
$id = $post['id'];
$title = $post['title'];
$body = $post['body'];
$author = $post['author'];

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

        <div class="bg-white rounded-lg shadow-md p-6 my-4">

            <h1 class="text-xl font-semibold"><?= $title ?></h1>
            <p class="mt-4"><?= $body ?></p>
            <h3><?= $author ?></h3>
            <a href="index.php"> Go Back</a>

        </div>

        <div class="flex justify-between">
            <form action="delete_post.php" method="post">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 w-48">Delete Post</button>
            </form>

            <form action="edit_post.php" method="get">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-48">Edit Post</button>
            </form>
        </div>



    </div>

</body>

</html>