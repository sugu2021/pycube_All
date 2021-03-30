<?php

error_reporting(0);
include '../blog/includes/database.php';
include './mail_attachment.php';
include './mailer.php';
$result = array('status' => false, 'message' => 'Invalid input');

if (isset($_POST['careers_form_sbt'])) {

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $job_title = mysqli_real_escape_string($connection, $_POST['job_title']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $post_message = mysqli_real_escape_string($connection, $_POST['message']);

    // File upload start
    $target_dir = "../resumes/";
    $filename = time() . '_' . basename($_FILES["resume"]["name"]);
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $resumeFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $resumeFileType = strtolower($resumeFileType);
    if ($resumeFileType != "pdf" && $resumeFileType != "doc" && $resumeFileType != "docx") {
        $result['status'] = false;
        $result['message'] = "Sorry, only DOC, DOCX & PDF files are allowed.";
    } else {
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
            $result['status'] = true;
        } else {
            echo $_FILES['resume']['error'];
            $result['status'] = false;
            $result['message'] = "Sorry, there was an error uploading your file.";
        }
    }

    if ($result['status']) {
        $created = date("Y-m-d H:i:s");
        $query = "INSERT INTO `careers`( `name`, `job_title`, `phone`, `email`, `message`, `file_name`,  `created`) VALUES ('$name', '$job_title','$phone','$email','$post_message', '$filename', '$created')";
        $add_whitepaper = mysqli_query($connection, $query);
        if ($add_whitepaper) {
            $result['status'] = true;
        } else {
            $result['status'] = false;
            $result['message'] = "Sorry something went wrong.  Please try after some time.";
        }
    }

    // Mail function start   
    if ($result['status']) {
        $url = 'https://www.pycube.com/show_file.php?' . base64_encode(base64_encode("path=resumes" . "&file=" . $filename));
        $mail_content = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
				   <tr> 
				     <td> 
  					      <p> <span style="font-weight:bold; padding-right:10px;"> Name: </span>' . $name . ' </p> 
						  <p> <span style="font-weight:bold; padding-right:10px;"> Email: </span>' . $email . '</p> 
						  <p> <span style="font-weight:bold; padding-right:10px;"> Phone Number: </span>' . $phone . ' </p>
                          <p> <span style="font-weight:bold; padding-right:10px;"> Message: </span> ' . $post_message . ' </p><p> <span style="font-weight:bold; padding-right:10px;"> Resume: </span> <a href="' . $url . '">Click here</a> </p>							  
					 
					 </td>
				   </tr>
				   
			     </table>';

        $message = $mail_head . $mail_content . $mail_footer;
        $file_names = array();
        $folder = '';
        $mailto = 'hr@pycube.com'; // 'amanda.atrash@pycube.com';
        $from_mail = $email;
        $from_name = $full_name;
        $replyto = $from_mail;
        $subject = "Resume from " . $name . " for " . $job_title;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <' . $email . '>' . "\r\n";
        //$headers .= "Bcc: v.phaneendrakumar@gmail.com\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
$headers .= 'Bcc: lead.brandstory@gmail.com' . "\r\n";

        if(mail($mailto, $subject, $message, $headers)){
            $result['status'] = true;
            $result['message'] = "Thank You for Applying";
        }else{
            $result['status'] = false;
            $result['message'] = "Sorry something went wrong.  Please try after some time.";
        }
    }
}
echo json_encode($result);
