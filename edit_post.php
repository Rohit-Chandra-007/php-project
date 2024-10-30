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


// check if the form is submitted

$isPutRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '') === 'put';
if ($isPutRequest) {
    # code...
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $body = htmlspecialchars($_POST['body']);
    $sql = "UPDATE posts SET title = :title, body = :body, author = :author WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $params = [
        'title' => $title,
        'body' => $body,
        'author' => $author,
        'id' => $id
    ];
    $statement->execute($params);
    header("Location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create New Post</title>
</head>

<body>

    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Update Blog Post</h1>
        </div>
    </header>

    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Update Blog Post</h2>
        <form method="post">
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="id" value="<? $id ?>">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" value="<?= $title ?>" placeholder="Enter post title" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-medium">Author</label>
                <input type="text" id="author" name="author" value="<?= $author ?>" placeholder="Enter author name" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="body" class="block text-gray-700 font-medium">Body</label>
                <textarea id="body" name="body" placeholder="Enter post body" rows="4" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $body ?></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Update</button>
                <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
            </div>
        </form>
    </div>


</body>

</html>