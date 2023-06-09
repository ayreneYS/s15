
<?php

$articles = [
    [
        "title"   => "First post",
        "content" => "This is the first of many posts!"
    ],
    [
        "title"   => "Another post",
        "content" => "Yet another fascinating post..."
    ],
    [
        "title"   => "Read this!",
        "content" => "You must read this now, it's essential reading!"
    ],
    [
        "title"   => "The latest news",
        "content" => "Here's the latest news, read it now."
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
<header>
    <h1>My Blog</h1>
</header>

<main>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
                </article>
            </li>
            <?php endforeach; ?>
    </ul>
</main>

  <footer>
    <p>© Copyright</p>
  </footer>
</body>
</html>



