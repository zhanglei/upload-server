upload-server
=============

文件上传服务器，可以支持并发上传大文件。基于Swoole扩展。

运行服务器程序
----
修改上传文件的根目录，和允许的最大尺寸。
```php
//设置上传文件的存储目录
$svr->setRootPath('/tmp/');
//设置允许上传的文件最大尺寸
$svr->setMaxSize(100*1024*1024);
```

在命令行中运行
```shell
php server.php
```

向服务器发送文件
----

```shell
php client.php -h 127.0.0.1 -p 9507 -f your_file.tar.gz
```
