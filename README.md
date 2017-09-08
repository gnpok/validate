# validate
Validate input data

> 提取出了tp5的规则验证

### 注意事项:
- 1 require 已变为required
- 2 number 更改为 integer
- 3 unique 被注释掉了

### 使用方法:
```php
require_once dirname(__FILE__).'/vendor/autoload.php';
use tp5\validate\Validate;

$validate = new Validate([
    'name' => 'required|max:3',
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

```

### 存在问题:
> 独立出来后，多多少少会出现问题，我也会在将来的实践中继续修改