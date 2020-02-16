<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>MySpot Demo Application</title>
    <style>
        body {
            font-size: 12px;
        }

        a {
            color: #06c;
            display: block;
            font-size: 14px;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        a:visited {
            color: #06c;
        }

        ul > li {
            display: inline-block;
            box-sizing: border-box;
            margin-right: 10px;
        }

    </style>
</head>
<body>
<ul>
    <li><a href="/">All posts</a></li>
    <li><a href="/user/vimac">vimac's posts</a></li>
    <li><a href="/user/user2">user2's posts</a></li>
    <li><a href="/user/user3">user3's posts</a></li>
    <li><a href="/users/vimac,user2">(vimac + user2)'s posts (select in demo)</a></li>
</ul>
<?php require_once 'posts.php' ?>
<ul>
    <li>
        <a href="https://github.com/vimac/myspot" target="_blank">MySpot Github Page</a>
    </li>
    <li>
        <a href="http://vifix.cn" target="_blank">vifix.cn</a>
    </li>
</ul>
</body>
</html>
