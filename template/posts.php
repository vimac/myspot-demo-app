<div id="count">
    There are <?=$count?> posts
</div>
<div id="posts">
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2>
                <?= $post->getTitle() ?>
            </h2>
            <p> Author: <?= $post->getUser() ?></p>
            <p>
                <?= $post->getText() ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>
