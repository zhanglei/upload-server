<?php
require_once __DIR__.'/classes/SwooleUploadServer.php';

$svr = new SwooleUploadServer;
//设置上传文件的存储目录
$svr->setRootPath('/tmp/');
//设置允许上传的文件最大尺寸
$svr->setMaxSize(100*1024*1024);
$svr->run();
