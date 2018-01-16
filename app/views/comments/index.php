<h2><?php echo $title; ?></h2>

<?php foreach ($comments as $comment): ?>

        <h3><?php echo $comment['name']; ?> Says:</h3>
        <div class="main">
        <?php echo $comment['comment']; ?>
        </div>
        <p><a href="<?php echo site_url('comments/'.$comment['id']); ?>">View Individual Comment</a></p>

<?php endforeach; ?>