<?php
require "database/index.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['author'], $_POST['body'])) {

    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $body = htmlspecialchars($_POST['body']);
    $sql = "INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)";
    $statement = $pdo->prepare($sql);
    $params = [
        'title' => $title,
        'body' => $body,
        'author' => $author,
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
            <h1 class="text-3xl font-semibold">Create Blog Post</h1>
        </div>
    </header>

    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Create Blog Post</h2>
        <form method="post">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter post title" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-medium">Author</label>
                <input type="text" id="author" name="author" placeholder="Enter author name" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="body" class="block text-gray-700 font-medium">Body</label>
                <textarea id="body" name="body" placeholder="Enter post body" rows="4" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
                <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
            </div>
        </form>
    </div>


</body>

</html>