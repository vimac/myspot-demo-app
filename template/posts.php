<?php foreach ($posts as $post): ?>
    <h2>
        <?= $post->getTitle() ?>
    </h2>
    <p> Author: <?= $post->getUser() ?></p>
    <p>
        <?= $post->getText() ?>
    </p>
    <hr/>
<?php endforeach; ?>
