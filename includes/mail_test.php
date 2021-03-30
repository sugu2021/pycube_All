<?php
$server_name = $_SERVER['SERVER_NAME'];
if( strpos( $server_name, 'pycube.com' ) !== false) {
    echo "pycube.com";
} else if( strpos( $server_name, 'staging.bimarian.com' ) !== false) {
    echo "staging.bimarian.com";
} 
exit;
$to = "v.phaneendrakumar@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: phani.v@standav.com" . "\r\n" .
"CC: phani.v@standav.com";
// send email
$res = mail($to,$subject,$txt,$headers);
/*
if(){
    echo "Done";
}else {
    echo "Not Done";
}
*/
var_dump($res);
?> 