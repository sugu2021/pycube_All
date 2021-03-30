<?php

include './blog/includes/database.php';

$post = json_encode($_POST);
$get = json_encode($_GET);
$request = json_encode($_REQUEST);
$headers = json_encode($_SERVER);


$str = "INSERT INTO `clearstream`(`post`, `get`, `request`, `headers`) VALUES ('$post','$get', '$request', '$headers')";

mysqli_query($connection, $str);
echo "Done";