<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/5
 * Time: 下午 4:43
 */
include 'Api.php';


$acc = Api::obj('acc');
$acc2 = Api::obj('acc2');
$acc3 = Api::obj('acc3');


var_dump($acc->get_api());
var_dump($acc2->get_api());
var_dump($acc->get_api());