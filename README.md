upload-server
=============

文件上传服务器，可以支持并发上传大文件。基于Swoole扩展。

运行服务器程序
----
修改RootPath，上传文件的根目录。
```shell
php server.php
```

向服务器发送文件
----

```shell
php client.php -h 127.0.0.1 -p 9507 -f your_file.tar.gz
```
