pay skd for PHP
--- 

![](https://img.shields.io/badge/oms.sdk-v.1.0-brightgreen.svg)

## 安装

```bash
comsposer install four-li/pay-sdk
```

## 使用

```php
<?php

require_once './vendor/autoload.php';

$ser = new \FourLi\Modal\PayEntity();

$res = $ser->test();

var_dump($res);

die;
```

## 测试
