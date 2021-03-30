<?php

error_reporting(0);
include '../blog/includes/database.php';
include './mail_attachment.php';
include './mailer.php';
$result = array('status' => false, 'message' => 'Invalid input');

if (isset($_POST['scheduledemo_sbt'])) {

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $company = mysqli_real_escape_string($connection, $_POST['company']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $post_message = mysqli_real_escape_string($connection, $_POST['message']);

    $demoname= mysqli_real_escape_string($connection, $_POST['demoname']);
    $date = mysqli_real_escape_string($connection, $_POST['date']);
    $time = mysqli_real_escape_string($connection, $_POST['time']);
    $solution = mysqli_real_escape_string($connection, $_POST['solution']);
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
                          
                          <p> <span style="font-weight:bold; padding-right:10px;"> Demo: </span>' . $demoname . ' </p>	
                          <p> <span style="font-weight:bold; padding-right:10px;"> Requested Date: </span> ' . $date . '</p>
                          <p> <span style="font-weight:bold; padding-right:10px;"> Requested Time: </span> ' . $time . ' </p>
					      <p> <span style="font-weight:bold; padding-right:10px;"> Solution Time Frame: </span> ' . $solution . ' </p>
					 </td>
				   </tr>
				   
			     </table>';

    $message = $mail_head . $mail_content . $mail_footer;
	
	$created = date("Y-m-d H:i:s");
        $query = "INSERT INTO `demo_requests`( `fname`, `lname`, `title`, `company`, `email`, `phone`, `message`,`demoname`,`reqdate`,`reqtime`,`solutiontime`, `created`) VALUES ('$fname','$lname','$title','$company','$email','$phone','$post_message','$demoname','$date','$time','$solution','$created')";
        $add_whitepaper = mysqli_query($connection, $query);


    $file_names = array();
    $folder = '';
    $mailto = 'neeraja.y@standav.com'; //amanda.atrash@pycube.com
    $from_mail = $email;
    $from_name = $full_name;
    $replyto = $from_mail;
    $subject = "Demo Request from " . $full_name;


    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <'.$email.'>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";
     //$headers .= 'Bcc: lead.brandstory@gmail.com' . "\r\n";

    mail($mailto, $subject, $message, $headers);

    //mail_attachment($file_names, $folder, $mailto, $from_mail, $from_name, $replyto, $subject, $message);  

    $result['status'] = true;
    $result['message'] = '<strong>Thank you for your demo request from Pycube Solutions.</strong> A member of our team will be 
    Responding to you shortly to confirm your date and time.';
}
echo json_encode($result);
