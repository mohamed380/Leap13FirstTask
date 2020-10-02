<?php
session_start();


require "../../classes/trackServices.php";

if(isset($_SESSION['username']) && isset($_SESSION['valid'])){
    $trackServices = new trackServices();
    $track = $_GET['trackTitle'];
    $filename = $trackServices->getDownloadPass($track);
    header("Content-type: image/jpg");  
    header("Cache-Control: no-store, no-cache");  
    header('Content-Disposition: attachment; filename='.$track.'_'.$filename);
    header('Pragma: private');
    readfile('../../data/'. $filename);

}
?>