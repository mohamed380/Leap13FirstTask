<?php 
require "../../classes/user.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$user = new User();
if($user->isAuth()){
    // include '../tracks/downloadTrack.php';
    echo json_encode(true) ;
}else{
    echo json_encode(false) ;
}

?>