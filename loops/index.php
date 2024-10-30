<?php

$title = "Learn PHP from Scratch";

$listing = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'Software Engineer is a person who designs, tests, maintains and evaluates computer software that enables computers to perform their applications.',
        'salary' => '$100,000',
        'location' => 'New York',
        'date' => '28-10-2024',
        'tags' => ['Software Engineer', 'Computer Science', 'Engineering'],
    ],
    [
        'id' => 2,
        'title' => 'Web Developer',
        'description' => 'Web Developer is a person who designs, tests, maintains and evaluates computer software that enables computers to perform their applications.',
        'salary' => '$80,000',
        'location' => 'California',
        'date' => '28-10-2024',
        'tags' => ['Web Developer', 'Computer Science', 'Engineering'],

    ],
    [
        'id' => 3,
        "title" => 'Data Scientist',
        'description' => 'Data Scientist is a person who designs, tests, maintains and evaluates computer software that enables computers to perform their applications.',
        'salary' => '$120,000',
        'location' => 'Texas',
        'date' => '28-10-2024',
        'tags' => ['Data Scientist', 'Computer Science', 'Engineering'],
    ],
    [
        'id' => 4,
        'title' => 'DevOps Engineer',
        'description' => 'DevOps Engineer is a person who designs, tests, maintains and evaluates computer software that enables computers to perform their applications.',
        'salary' => '$110,000',
        'location' => 'Florida',
        'date' => '28-10-2024',
        'tags' => ['DevOps Engineer', 'Computer Science', 'Engineering'],
    ],
    [
        'id' => 5,
        'title' => 'Network Engineer',
        'description' => 'Network Engineer is a person who designs, tests, maintains and evaluates computer software that enables computers to perform their applications.',
        'salary' => '$90,000',
        'location' => 'Washington',
        'date' => '28-10-2024',
        'tags' => ['Network Engineer', 'Computer Science', 'Engineering'],
    ]
]


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
        <?php foreach ($listing as $index => $jobs) : ?>
            <div class="
                <?php if ($index % 2 === 0): ?>
                bg-blue-100
                <?php else: ?>
                bg-white 
                <?php endif; ?>
                rounded-lg shadow-md p-6 my-4">
                <h2 class="text-xl font-semibold"><?= $jobs['title'] ?></h2>
                <p class="text-gray-600"><?= $jobs['description'] ?></p>
                <div class="flex justify-between items-end mt-4">
                    <div>
                        <ul>
                            <li class="text-gray-600"><strong>Salary: </strong><?= $jobs['salary'] ?></li>
                            <li class="text-gray-600"><strong>Location: </strong><?= $jobs['location'] ?></li>
                            <li class="text-gray-600"><strong>Date: </strong><?= $jobs['date'] ?></span>
                        </ul>

                    </div>
                    <div>
                        <?php foreach ($jobs['tags'] as $tag) : ?>
                            <span class="bg-blue-500 text-white rounded-full px-2 py-1 text-sm"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

</body>

</html>