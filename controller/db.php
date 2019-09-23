<?php

// 载入composer的autoload文件
include '../vendor/autoload.php';

$database = [
    'driver'    => 'mysql',
    'host'      => '18.163.42.141',
    'database'  => 'economic_data',
    'username'  => 'economic_admin',
    'password'  => '6Truw6hhv*Xb4ruw3!3xV*!',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as DB;//如果你不喜欢这个名称，as DB;就好

$DB = new DB;

// 创建链接
$DB->addConnection($database);

// 设置全局静态可访问
$DB->setAsGlobal();

// 启动Eloquent
$DB->bootEloquent();