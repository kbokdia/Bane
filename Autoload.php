<?php
/**
 * Created by PhpStorm.
 * User: kbokdia
 * Date: 15/10/15
 * Time: 3:36 PM
 */

require 'includes/DBConfig.php';

function autoload($className)
{
    //echo "<br>".$className."<br>";
    $className = ltrim($className, "\\");

    $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $className). ".php";
    //echo $fileName;
    require $fileName;
}

function sec_session_start() {
    $session_name = 'bane_session_id';   // Set a custom session name
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: error/error.php?error=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"],
        $cookieParams["domain"],
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session
    session_regenerate_id(true);    // regenerated the session, delete the old one.
}

spl_autoload_register('autoload');
