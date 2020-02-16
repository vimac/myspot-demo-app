<?php
// config/myspot/test/post.php
use MySpot\SqlMapStatement;

return [
    'selectIdUserTitleTextCreatedAt' => [
        'sql' => 'SELECT `id`, `user`, `title`, `text`, `created_at` FROM `post`',
        'resultType' => MyProject\DataObject\Test\PostDO::class,
        'resultMapStyle' => SqlMapStatement::MAP_STYLE_UNDERSCORE_TO_LOWER_CAMELCASE
    ],
    'selectIdUserTitleTextCreatedAtByUser' => [
        'sql' => 'SELECT `id`, `user`, `title`, `text`, `created_at` FROM `post` WHERE `user` = :user',
        'resultType' => MyProject\DataObject\Test\PostDO::class,
        'resultMapStyle' => SqlMapStatement::MAP_STYLE_UNDERSCORE_TO_LOWER_CAMELCASE
    ],
    'selectIdUserTitleTextCreatedAtByUsers' => [
        'sql' => 'SELECT `id`, `user`, `title`, `text`, `created_at` FROM `post` WHERE `user` in :user:',
        'resultType' => MyProject\DataObject\Test\PostDO::class,
        'resultMapStyle' => SqlMapStatement::MAP_STYLE_UNDERSCORE_TO_LOWER_CAMELCASE
    ],
    'selectCountByUser' => [
        'sql' => 'SELECT COUNT(*) FROM `post` :whereUser?{WHERE `user` IN :user:}'
    ],
    'insertUserTitleText' => [
        'sql' => 'INSERT INTO `post`(`user`, `title`, `text`) VALUES (:user, :title, :text)'
    ],
    'deleteByUser' => [
        'sql' => 'DELETE FROM `post` WHERE `user` = :user'
    ],
    'updateUserByUser' => [
        'sql' => 'UPDATE `post` SET `user` = :newUser WHERE `user` = :user'
    ],

];


