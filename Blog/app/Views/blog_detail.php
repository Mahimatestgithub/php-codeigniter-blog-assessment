<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($blog['title']) ?></title>
</head>
<body>
    <h1><?= esc($blog['title']) ?></h1>
    <p><strong>Author:</strong> <?= esc($blog['author']) ?></p>
    <p><strong>Published:</strong> <?= esc($blog['publication_date']) ?></p>
    <hr>
    <p><?= esc($blog['content']) ?></p>
    <a href="/">Back to Homepage</a>
</body>
</html>
