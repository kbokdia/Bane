<?php
/**
 * Created by PhpStorm.
 * User: kbokdia
 * Date: 15/10/15
 * Time: 3:14 PM
 */

namespace db;


class Connection
{
    public static function get(){

        $mysqli  = new \mysqli(HOST, USER, PASSWORD, DATABASE);

        if ($mysqli->connect_errno) {
            die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}