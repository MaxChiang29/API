<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/4
 * Time: 下午 4:40
 */


class ApiHeader {

    private $header;
    private static $_obj=null;

    function __construct(){
        /*
         *
         */
    }

    /*  Singleton */
    public static function obj(){
        if(!(self::$_obj instanceof self)){
            self::$_obj = new self();
        }
        return self::$_obj;
    }

    private function setHeader(){

    }

    public function getHeader(){

    }

    public function changeHeader(){

    }

}