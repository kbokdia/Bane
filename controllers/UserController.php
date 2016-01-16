<?php
/**
 * Created by PhpStorm.
 * User: kbokdia
 * Date: 15/10/15
 * Time: 3:11 PM
 */
namespace controllers;

require '../Autoload.php';
use models\Users;

function createResponse($status,$message){
    return array('status' => $status, 'message' => $message);
}

$response = array("Invalid");

//General Validation
do {
    if (isset($_POST)) {
        $validate = true;
    }
    else{
        $validate = false;
        $response = createResponse(0,"Invalid");
        break;
    }

    if(empty($_POST['mode']) || empty($_POST["userCode"])) {
        $validate = false;
        $response = createResponse(0,"Invalid Request");
        break;
    }

    //Delete mode
    if ($_POST["mode"] == "3") {
        break;
    }

    //Validate required fields
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        $validate = false;
        $response = createResponse(0,"Required fields are empty");
        break;
    }

} while (0);

//Business Logic
if ($validate) {
    $data = $_POST;
    if(intval($data["mode"]) == 1){
        $user = new Users();
        $user->name = $data["name"];
        $user->email = $data["email"];
        $user->mobile = $data["password"];
        $response = $user->add();
    }
}

echo json_encode($response);