<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <?php if (!empty($blogs) && is_array($blogs)): ?>
        <?php foreach ($blogs as $blog): ?>
            <div>
                <h2><?= esc($blog['title']) ?></h2>
                <p><?= esc(substr($blog['content'], 0, 100)) ?>...</p>
                <p><strong>Author:</strong> <?= esc($blog['author']) ?></p>
                <p><strong>Published:</strong> <?= esc($blog['publication_date']) ?></p>
                <a href="/blog/<?= $blog['id'] ?>">Read More</a>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</body>
</html>
