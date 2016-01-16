<?php
/**
 * Created by PhpStorm.
 * User: kbokdia
 * Date: 16/01/16
 * Time: 3:47 AM
 */
if(!empty($_GET['error'])){
    echo $_GET['error'];
}
else{
    echo 'Invalid';
}