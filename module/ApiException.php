<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/4
 * Time: 下午 4:40
 */
/*
 * singleton
 * */

class ApiException {
    private static $_list=null;
    private static $_obj=null;

    public function __construct(){


    }

    public static function obj(){
        if(!(self::$_obj instanceof self)){
            self::$_obj = new self();
        }
        return self::$_obj;
    }


}