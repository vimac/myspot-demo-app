CREATE TABLE IF NOT EXISTS `post` (
    `id` INTEGER PRIMARY KEY AUTOINCREMENT,
    `user` VARCHAR(100) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `text` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
);

INSERT INTO `POST` (user, title, text)
VALUES ("vimac", "Hello MySpot", "You can see all queries in STDOUT");
INSERT INTO `POST` (user, title, text)
VALUES ("vimac", "GUI utility",
        "Checkout <a href='https://github.com/vimac/iCopyPaste' target='_blank'>iCopyPaste</a>");
INSERT INTO `POST` (user, title, text)
VALUES ("user2", "Demo Title", "This is the third post");
INSERT INTO `POST` (user, title, text)
VALUES ("user2", "Another Demo Title", "This is the fourth post");
INSERT INTO `POST` (user, title, text)
VALUES ("user3", "Title 5", "This is the fifth post");
INSERT INTO `POST` (user, title, text)
VALUES ("user3", "Title 6", "This is the sixth post");
