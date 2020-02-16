# MySpot Demo Application

[中文版读我 / Readme in Chinese](README.zh.md)

This is a demo application of MySpot DAL framework, checkout: [MySpot Github Page](https://github.com/vimac/myspot)

#### How to run

To run the application in development, you can run these commands 

```bash
cd myspot-demo-app
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
cd myspot-demo-app
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

That's it!

#### Key files

Here's a list if you just want to quickly learn how to use MySpot.

* SQLMap Initializer: **${ProjectRoot}/config/dependencies.php**
* SQLMap Configuration File: **${ProjectRoot}/config/myspot**
* DAO Class File: **${ProjectRoot}/src/DAO/Test/PostDAO.php**

I still recommend the GUI tool, which can generate MySpot sql code: [iCopyPaste](https://github.com/vimac/iCopyPaste)

#### Other information

This demo application uses Slim Framework 4.x, know more about it: [Slim Framework](http://www.slimframework.com/)
