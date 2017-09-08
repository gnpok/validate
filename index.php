<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2017/9/8
 * Time: 上午10:55
 */


require_once dirname(__FILE__).'/vendor/autoload.php';
use tp5\validate\Validate;

$validate = new Validate([
    'name' => 'require|max:3',
    'email' => 'require',
    'url' => 'activeUrl'
]);

$data = [
    'name' => 'bobo',
    'email' => 'test@qq.com',
    'url' => 'baidu.com'
];

if($validate->check($data)){
    #continue;
}else{
    var_dump($validate->getError());
}

