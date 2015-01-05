<div id="main">
    <div id="content">
        <?php if (!empty($posts)) : $i = 1;?>
            <?php foreach($posts as $item): ?>
            <section <?php if($i%2 == 0) echo "class='color'"; ?>>
                <?php echo html_entity_decode($item->content); ?>
            </section>
            <?php $i++; endforeach; ?>
        <?php endif; ?>
    </div>
</div><!-- #main -->