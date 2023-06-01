
<?php

$name = "Ays";
$hour = 9;

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
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
    <h1>Lorem ipsum</h1>

    <p>Hello, <?= $name; ?>!</p>
    
    <?php if ($hour < 12): ?>
        Good morning
    <?php elseif ($hour < 18): ?>
        Good afternoon
    <?php elseif ($hour < 22): ?>
        Good evening
    <?php else : ?>
        Good night
    <?php endif; ?>

    <!--
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="page2.html">Page 2</a></li>
    </ul>
  </nav>
  -->

  <main>
    <article>
      <h2>Article heading</h2>

      <!-- this text won't be displayed in the browser -->

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam lectus. Set sit amet ipsum mauris.</p>

      <h3>Subsection</h3>

      <p>Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </article>

    <aside>
      <h2>Advertisement</h2>

      <p>Buy things!</p>

      <h2>Related links</h2>

      <ul>
        <li><a href="page3.html">I also wrote this</a></li>
        <li><a href="another.html">An interesting document</a></li>
      </ul>
      <aside>
  </main>

  <footer>
    <p>© Copyright</p>
  </footer>
</body>
</html>



