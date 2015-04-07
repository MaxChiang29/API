<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/4
 * Time: 下午 4:39
 */

class ApiConnect {
    private static $_obj=null;
    private $_health_list = array();




    public static function obj(){
        if(!(self::$_obj instanceof self)){
            self::$_obj = new self();
        }
        return self::$_obj;
    }



    private function writehealth(){

    }




    public function getheath(){

    }




    private function testhealth(){

    }

}