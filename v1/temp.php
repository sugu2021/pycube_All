<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$full_name = "Phani Developer";
$filename = 'Phani_Developer_155989765218.pdf';
$file_path = 'https://www.pycube.com/show_file.php?' . base64_encode(base64_encode("path=roi" . "&file=" . $filename));
$url = "https://www.pycube.com/roi_mailer.php?name=" . urlencode(trim($full_name)) . "&file_path=" . urlencode(base64_encode($file_path));
$email_curl = curl_init($url);
curl_setopt($email_curl, CURLOPT_RETURNTRANSFER, 1);
$email_content = curl_exec($email_curl);
curl_close($email_curl);

echo $url;
echo $email_content;