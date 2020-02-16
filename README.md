# MySpot Demo Application

This is a demo application of MySpot DAL framework, checkout: [MySpot Github Page](https://github.com/vimac/myspot)

To run the application in development, you can run these commands 

```bash
cd myspot-demo-app
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
cd [myspot-demo-app]
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

Run this command in the application directory to run the test suite

```bash
composer test
```

That's it!
