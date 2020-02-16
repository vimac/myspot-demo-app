# MySpot Demo Application

这是一个关于 MySpot 数据库持久化框架的演示应用, 更多信息可以访问 [MySpot Github Page](https://github.com/vimac/myspot)

#### 如何运行

在开发环境运行以下命令:

```bash
cd myspot-demo-app
composer start
```

如果你对 Docker 比较熟悉, 也可以使用 `docker-compose` 在 Docker 中运行, 运行以下命令:
```bash
cd myspot-demo-app
docker-compose up -d
```

运行上述命令之后(二选一), 浏览器打开 `http://localhost:8080` 即可.

#### 关键性文件

如果您只是想快速学习如何使用 MySpot, 可以查看以下文件

* SQLMap 初始化: **${ProjectRoot}/config/dependencies.php**
* SQLMap 配置文件: **${ProjectRoot}/config/myspot**
* DAO 类文件: **${ProjectRoot}/src/DAO/Test/PostDAO.php**

这里仍然推荐一下也是我自己写的 GUI 工具, 可以生成 MySpot 的代码: [iCopyPaste](https://github.com/vimac/iCopyPaste)

#### 其它信息

这个演示应用使用的框架为 Slim Framework 4.x, 如果你想了解更多关于它的内容: [Slim Framework](http://www.slimframework.com/)
