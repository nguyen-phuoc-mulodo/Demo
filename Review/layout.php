<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php foreach ($data as $item): ?>
            <li>
                <a href="/show.php?id=<?php echo $item['id'] ?>">
                    <?php echo $item['content'] ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>