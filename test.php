<?php

require_once './vendor/autoload.php';

$ser = new \FourLi\Modal\PayEntity();

$res = $ser->test();

var_dump($res);

die;


