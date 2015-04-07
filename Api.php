<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/4
 * Time: 下午 4:38
 */
include __DIR__ . '/allAutoload.php';

class Api
{
    private static $_obj = array();
    private $_api = array();



    public static function obj($api)
    {

        if (!isset(self::$_obj[$api]) || !(self::$_obj[$api] instanceof self)) {
            self::$_obj[$api] = new self($api);
        }
        return self::$_obj[$api];

    }

    public function __construct($api)
    {

        try {
            $this->_api=array(
                'name' => $api,
                'log'  => ApiLog::obj(),
                'Exception' =>ApiException::obj(),
                'Setup' => new ApiSetup(),
                'Connect' => ApiConnect::obj(),
                'Header' => ApiHeader::obj()
            );

        } catch (Exception $e) {

        }

    }

    private function setHeader()
    {

    }

    private function setUp()
    {

    }

    private function connect()
    {

    }

    private function apiException()
    {

    }

    public function apiRequest()
    {

    }

    public function apiReponse()
    {

    }


    private function checkapi($api)
    {

    }

    public function get_api(){
        return $this->_api;
    }
}