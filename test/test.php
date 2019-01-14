<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/14
 * Time: 16:21
 */
include "../vendor/autoload.php";

use wxpay\Pay;

$Pay = new Pay();
var_dump($Pay->init());