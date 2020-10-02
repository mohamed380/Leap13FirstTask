<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");


require "../../classes/trackServices.php";

$trackServices = new trackServices();
echo $trackServices->fetchTracks();

?>
