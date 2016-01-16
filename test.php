<?php
/**
 * Created by PhpStorm.
 * User: kbokdia
 * Date: 16/01/16
 * Time: 1:08 PM
 */

define("ROOT","");
require 'Autoload.php';

$user = new \Bane\models\Users();
$user->add();