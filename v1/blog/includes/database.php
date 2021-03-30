<?php

$server = "";

$server_name = $_SERVER['SERVER_NAME'];
if( strpos( $server_name, 'pycube.com' ) !== false) {
    $server = "pycube.com";
} else if( strpos( $server_name, 'staging.bimarian.com' ) !== false) {
    $server = "staging.bimarian.com";
} else if( strpos( $server_name, '54.198.250.87' ) !== false) {
    $server = "54.198.250.87";
} 
switch ($server) {
    case "staging.bimarian.com":
        $host = "staging.bimarian.com";
        $user = "root";
        $password = "bimarian@2013";
        $db_name = "blog_pycube";
        break;
    case "pycube.com":
        $host = "localhost";
        $user = "root";
        $password = "Pycube123$";
        $db_name = "blog_pycube";
        break;    
	case "54.198.250.87":
	    $host = "localhost";
        $user = "root";
        $password = "Pycube123$";
        $db_name = "blog_pycube";
        break;
    default:
        echo "<p>Please check server</p>";
}

$db['db_host'] = $host;
$db['db_user'] = $user;
$db['db_pass'] = $password;
$db['db_name'] = $db_name;

foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
