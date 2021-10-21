<?php 
//start session
if(!isset($_SESSION)){
    session_start();
}

//creat constants to Store Non Repeating Values
define('SITEURL','http://localhost/project02/');
define('LOCALHOST','localhost');
define('DB_USERNAME', "root");
define('DB_PASSWORD', '');
define('DB_NAME','project02');
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME); //SElecting Database

?>