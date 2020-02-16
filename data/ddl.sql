
CREATE TABLE `post` (
    `id` INTEGER PRIMARY KEY AUTOINCREMENT,
    `user` VARCHAR(100) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `text` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
);


INSERT INTO `POST` (user, title, text) VALUES ("vimac", "Hello, World", "Hello World Content");
INSERT INTO `POST` (user, title, text) VALUES ("vimac", "Post 2", "This is the second post");
INSERT INTO `POST` (user, title, text) VALUES ("user2", "Post 3", "This is the third post");
INSERT INTO `POST` (user, title, text) VALUES ("user2", "Post 4", "This is the fourth post");
INSERT INTO `POST` (user, title, text) VALUES ("user3", "Post 5", "This is the fifth post");
INSERT INTO `POST` (user, title, text) VALUES ("user3", "Post 6", "This is the sixth post");
