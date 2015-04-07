<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2015/4/5
 * Time: 下午 12:10
 */


/*
 * API Request
 * */

class ApiExec {

    private $_curl;
    private $_curl_keeplived;

    function __construct(){
        echo 'Exec';

    }

    function exec($type,$url,$params){

        switch ($type) {
            case 'DELETE':
                curl_setopt($this->_curl, CURLOPT_URL, $url . '?' . http_build_query($params));
                curl_setopt($this->_curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
            case 'PUT':
                curl_setopt($this->_curl, CURLOPT_URL, $url);
                curl_setopt($this->_curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($this->_curl, CURLOPT_POSTFIELDS, http_build_query($params));
                break;
            case 'POST':
                curl_setopt($this->_curl, CURLOPT_CUSTOMREQUEST, 'POST');
                curl_setopt($this->_curl, CURLOPT_URL, $url);
                curl_setopt($this->_curl, CURLOPT_POST, true);
                if(!is_array($params)) {
                    curl_setopt($this->_curl, CURLOPT_POSTFIELDS, $params);
                }else{
                    curl_setopt($this->_curl, CURLOPT_POSTFIELDS, http_build_query($params));
                }
                break;
            case 'GET':
                curl_setopt($this->_curl, CURLOPT_URL, $url . '?' . http_build_query($params));
                curl_setopt($this->_curl, CURLOPT_CUSTOMREQUEST, 'GET');
                break;
        }
    }


}