<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo $url = 'show_file.php?'.base64_encode(base64_encode("path=casestudies&file=CASE STUDY #2 - Pycube, Inc. Perimeter Fencing Case Study v2.pdf"));
//return;
$query_string_decode = $_SERVER['QUERY_STRING'];
$query_string_encode = base64_decode(base64_decode($query_string_decode));

parse_str($query_string_encode);
if (isset($path) && isset($file)) {
    $full_path = $path."/".$file;

    $filePath = $path;
    $filename = $file;
    
    $content_type = mime_content_type($full_path);
    
    header('Content-Type:'.$content_type);
    //header('Content-Type:application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('content-Transfer-Encoding:binary');
    header('Accept-Ranges:bytes');
// readfile($filePath);
    echo file_get_contents($full_path);
} else {
    header("Location: http://www.pycube.com/"); /* Redirect browser */
    exit();
}
