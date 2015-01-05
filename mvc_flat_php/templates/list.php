
<?php $title = "List of posts"; ?>


<?php ob_start(); ?>
    <h1>List of Posts</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/read?id=<?php echo $post['id'] ?>">
                <?php echo $post['name'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>

<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php'; ?>