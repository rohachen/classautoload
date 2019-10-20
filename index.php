<?php 

// psr-0
// 命名空间与路径一致
// 文件名与类名一致
// 类中不可有可执行代码
// 类首字母大写

define('BASEDIR',__DIR__);


include(BASEDIR.'\IMooc\Loader.php');

spl_autoload_register('\\IMooc\\Loader::autoload');


// IMooc\Object::test();

$db = new IMooc\Database();
// 链式操作
$db->where('id>0')->where('name=f');