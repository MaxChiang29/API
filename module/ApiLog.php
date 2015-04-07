<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/4
 * Time: 下午 4:39
 */

/*
 * singleton
 * */

class ApiLog {
    // Log filename
    private $_filename;
    // Log file path
    private $_path;
    //log content
    private $_log;
    //log object
    private static $_obj = null;

    public function __construct(){

    }

    public static function obj(){
        if(!(self::$_obj instanceof self)){
            self::$_obj = new self();
        }
        return self::$_obj;
    }


    public function __setlog($log){

    }

    public function __writelog(){

    }

}