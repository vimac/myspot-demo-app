<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>MySpot Demo Application</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 13px;
        }

        a {
            color: #06c;
            display: block;
            font-size: 14px;
            text-decoration: none;
            line-height: 2em;
            padding: 0 10px;
            background: #eee;
        }

        a:hover {
            text-decoration: underline;
        }

        a:visited {
            color: #06c;
        }

        ul {
            margin-top: 10px;
        }

        ul > li {
            display: inline-block;
            margin-right: 5px;
            padding: 0;
        }

        #count {
            margin: 10px 20px 0;
            color: darkred;
        }

        #posts {
            display: flex;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .post {
            padding: 10px;
            border: 1px solid #ccc;
            margin: 5px;
        }

        form {
        }

        form > p {
            margin: 5px;
        }

        form > button {
            padding: 5px;
            font-weight: bold;
        }

        textarea {
            width: 400px;
            height: 100px;
        }


    </style>
</head>
<body>
<ul>
    <li><a href="/">All posts</a></li>
    <li><a href="/user/vimac">View vimac's posts</a></li>
    <li><a href="/user/user2">View user2's posts</a></li>
    <li><a href="/users/vimac,user2">View (vimac + user2)'s posts (select in demo)</a></li>
    <li><a href="/delete/user2">Delete user2's posts</a></li>
    <li><a href="/update/user2">Update user2's posts to vimac</a></li>
    <li><a href="/reset">Reset All</a></li>
</ul>
<form action="/new" method="post">
    <p>
        New Post
    </p>
    <p>
        <label for="user">User <input name="user"/></label>
    </p>
    <p>
        <label for="title">Title <input name="title"/></label>
    </p>
    <p>
        <label for="text">Content <textarea name="text"></textarea></label>
    </p>
    <button type="submit">submit</button>
</form>
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
