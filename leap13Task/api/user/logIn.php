<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require "../../classes/user.php";


$user = new User($_POST['username'] , $_POST['password']);

if($user->login()){
    echo json_encode(true) ;
}else{
    echo json_encode(false) ;
}

?>