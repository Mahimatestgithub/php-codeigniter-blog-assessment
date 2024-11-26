<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
</head>
<body>
    <h1>Add a New Blog</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="/admin/add-blog" method="post">
        <?= csrf_field() ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required>
        <br>
        <button type="submit">Add Blog</button>
    </form>
</body>
</html>
