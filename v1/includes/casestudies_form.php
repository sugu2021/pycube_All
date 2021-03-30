<?php

error_reporting(0);
include '../blog/includes/database.php';
include './mail_attachment.php';
include './mailer.php';
$result = array('status' => false, 'message' => 'Invalid input');
if (isset($_POST['casestudies_sbt'])) {
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $company = mysqli_real_escape_string($connection, $_POST['company']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $post_message = mysqli_real_escape_string($connection, $_POST['message']);
    $full_name = $fname . " " . $lname;


    $created = date("Y-m-d H:i:s");
    $query = "INSERT INTO `casestudies`( `fname`, `lname`, `title`, `company`, `email`, `phone`, `message`, `created`) VALUES ('$fname', '$lname','$title','$company','$email','$phone','$post_message','$created')";
    $add_whitepaper = mysqli_query($connection, $query);

    // Mail function start
    // basic details

    $folder = 'casestudies';
    $file = '';
    if ($title == 'Asset Management Solutions') {
        $file = 'CASE STUDY #1 - Pycube, Inc. Asset Management Case Study.pdf';
    } else if ($title == 'Patient Flow Management') {
        $file = 'CASE STUDY #3 - Pycube, Inc. ED Case Study.pdf';
    } else if ($title == 'Staff Management') {
        $file = '';
    } else if ($title == 'Utility Management') {
        $file = 'CASE STUDY #2 - Pycube, Inc. Perimeter Fencing Case Study v2.pdf';
    }

    $url = 'https://www.pycube.com/show_file.php?' . base64_encode(base64_encode("path=" . $folder . "&file=" . $file));

    $mailto = $email;
    $from_mail = "support@pycube.com";
    $from_name = "Pycube";
    $replyto = "sales@pycube.com";
    $subject = "Case Studies - " . $title;
    $message = $mail_head . '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr> 
				     <td><p>Dear ' . trim($full_name) . ',</p><p>Thank you for contacting with Pycube.</p><p>You have requested for ' . $title . ', please <a href="' . $url . '">click here</a> for more details.</p></td></tr></table>' . $mail_footer;

       
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <sales@pycube.com>' . "\r\n";
    $headers .= 'Cc: hr@pycube.com' . "\r\n"; // amanda.atrash@pycube.com
$headers .= 'Bcc: lead.brandstory@gmail.com' . "\r\n";

    $res = mail($mailto, $subject, $message, $headers);

    if ($res) {
        $result['status'] = true;
        $result['message'] = '<strong>Thank you.</strong> You receive details shortly through mail. ';
    } else {
        $result['status'] = false;
        $result['message'] = 'Something went wrong, please try again ';
    }
}
echo json_encode($result);
