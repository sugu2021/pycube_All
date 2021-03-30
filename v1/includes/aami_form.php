<?php

error_reporting(0);
include '../blog/includes/database.php';
include './mail_attachment.php';
include './mailer.php';
$result = array('status' => false, 'message' => 'Invalid input');
if (isset($_POST['aami_sbt'])) {

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $company = mysqli_real_escape_string($connection, $_POST['company']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $post_message = mysqli_real_escape_string($connection, $_POST['message']);
    $full_name = $fname . " " . $lname;

    // Mail function start   

    $mail_content = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
				   <tr> 
				     <td> 
  					      <p> <span style="font-weight:bold; padding-right:10px;"> Name: </span>' . $full_name . ' </p> 
						  <p> <span style="font-weight:bold; padding-right:10px;"> Email: </span>' . $email . '</p> 
						  <p> <span style="font-weight:bold; padding-right:10px;"> Phone Number: </span>' . $phone . ' </p>
                          <p> <span style="font-weight:bold; padding-right:10px;"> Company: </span>' . $company . ' </p>	
                          <p> <span style="font-weight:bold; padding-right:10px;"> Title: </span> ' . $title . '</p>
                          <p> <span style="font-weight:bold; padding-right:10px;"> Message: </span> ' . $post_message . ' </p>							  
					 
					 </td>
				   </tr>
				   
			     </table>';

    $message = $mail_head . $mail_content . $mail_footer;


    $file_names = array();
    $folder = '';
    $mailto = 'amanda.atrash@pycube.com';
    
    $from_mail = $email;
    $from_name = $full_name;
    $replyto = $from_mail;
    $subject = "AAMIExchange 2019 - Contact Us from " . $full_name;


    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Bcc: lead.brandstory@gmail.com' . "\r\n";

    //$headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($mailto, $subject, $message, $headers);

    //mail_attachment($file_names, $folder, $mailto, $from_mail, $from_name, $replyto, $subject, $message);  

    $result['status'] = true;
    $result['message'] = '<strong>Thank you for contacting us.</strong> One of our representatives will be in contact with you shortly regarding your inquiry. ';
}
echo json_encode($result);
