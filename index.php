<?php
/**
 * Created by PhpStorm.
 * User: ZhouJun
 * Date: 2018/7/6
 * Time: 15:32
 */
// 应用目录为当前目录
define('APP_PATH', __DIR__.'/');
echo __DIR__;
// 开启调试模式
define('APP_DEBUG', true);
// 网站根URL
define('APP_URL', 'http://localhost/myphp');
// 加载框架
require './frame/Frame.php';


$a = 1;