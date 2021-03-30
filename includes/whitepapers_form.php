<?php

error_reporting(0);
include '../blog/includes/database.php';
include './mail_attachment.php';
include './mailer.php';
$result = array('status' => false, 'message' => 'Invalid input');
if (isset($_POST['whitepapers_sbt'])) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $company = mysqli_real_escape_string($connection, $_POST['company']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $post_message = mysqli_real_escape_string($connection, $_POST['message']);
    $full_name = $fname . " " . $lname;
    
    $folder = 'whitepapers';
    $file = 'Whitepapers - Artificial Intelligence in Predictive Maintenance of Hospital Equipment.pdf';
    $url = 'https://www.pycube.com/show_file.php?' . base64_encode(base64_encode("path=" . $folder . "&file=" . $file));


    $created = date("Y-m-d H:i:s");
    $query = "INSERT INTO `whitepapers`( `fname`, `lname`, `title`, `company`, `email`, `phone`, `message`, `created`) VALUES ('$fname', '$lname','$title','$company','$email','$phone','$post_message','$created')";
    $add_whitepaper = mysqli_query($connection, $query);

    // Mail function start   

    $mailto = $email;
    $from_mail = "support@pycube.com";
    $from_name = "Pycube";
    $replyto = "sales@pycube.com";
    $subject = "Contacting for White Papers";
    $message = $mail_head . '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr> 
				     <td><p>Dear ' . trim($full_name) . ',</p><p>Thank you for contacting with Pycube.</p><p>You have requested for White Papers, please <a href="' . $url . '">click here</a> for more details.</p></td></tr></table>' . $mail_footer;   


    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <sales@pycube.com>' . "\r\n";
    $headers .= 'Cc: hr@pycube.com' . "\r\n"; //amanda.atrash@pycube.com

    $res = mail($mailto, $subject, $message, $headers);


    //mail_attachment($file_names, $folder, $mailto, $from_mail, $from_name, $replyto, $subject, $message);
    // Mail function end

    if ($res) {
        $result['status'] = true;
        $result['message'] = '<strong>Thank you for subscribing White papers.</strong>';
    } else {
        $result['status'] = false;
        $result['message'] = 'Something went wrong, please try again ';
    }
}
echo json_encode($result);
