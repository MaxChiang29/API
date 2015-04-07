<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/5
 * Time: 下午 4:00
 */
function allAutoload($className)
{
    $folder = __DIR__ . "/module/";

    $fileName = $folder . $className . ".php";
    if (is_readable($fileName)) {
         require $fileName;
    }

}

spl_autoload_register('allAutoload');