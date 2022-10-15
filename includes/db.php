<?php
date_default_timezone_set('Poland');
session_start();
// $dbsn="localhost";
// $dbun="zmiankap_2137";
// $dbp="Ustawienia123!"; 
// $dbn="	zmiankap_zmiankap";
$dbsn="localhost";
$dbun="root";
$dbp=""; 
$dbn="bjlogin";
$conn = mysqli_connect($dbsn,$dbun,$dbp,$dbn);
if(!$conn){
    die("mysql connection error");
}
