<?php
/**
 * Created by PhpStorm.
 * User: kbokdia
 * Date: 16/01/16
 * Time: 3:09 AM
 */

namespace Bane\base;


use db\Connection;

class BaseClass
{
    var $mysqli;
    var $regCode;
    var $familyCode;

    function __construct(){
        $this->mysqli = Connection::get();
    }

    public static function createResponse($status,$message){
        return array('status' => $status, 'message' => $message);
    }

    function escapeData($data){
        foreach ($data as $key => $value) {
            if(is_array($value)){
                $data[$key] = $this->escapeData($value);
            }
            else{
                $data[$key] = $this->mysqli->real_escape_string($value);
            }
        }
        return $data;
    }

    function __destruct(){
        $this->mysqli->close();
    }
}