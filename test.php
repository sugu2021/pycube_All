<?php
function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
    $file = $path.$filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $nmessage = "--".$uid."\r\n";
    $nmessage .= "Content-type:text/html; charset=iso-8859-1\r\n";
    $nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $nmessage .= $message."\r\n\r\n";
    $nmessage .= "--".$uid."\r\n";
    $nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; 
    $nmessage .= "Content-Transfer-Encoding: base64\r\n";
    $nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $nmessage .= $content."\r\n\r\n";
    $nmessage .= "--".$uid."--";
error_reporting(E_ALL);
    if (mail($mailto, $subject, $nmessage, $header)) {
        echo "Mail Sent Successfully to " . $mailto ."<br/>"; // or use booleans here
    } else {
        echo "Mail NOT Sent to " .$mailto ."<br/>";
    }

}
//mail_attachment('CASE STUDY #1 - Pycube, Inc. Asset Management Case Study.pdf', 'casestudies', 'v.phaneendrakumar@gmail.com', 'phani.v@standav.com', 'Phani', '', 'Mail Attachment', '<h1>Welcome</h1>');
phpinfo();
