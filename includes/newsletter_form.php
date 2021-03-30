<?php
error_reporting(0);
include '../blog/includes/database.php';
$result = array('status' => false, 'message' => 'Invalid input');
if (isset($_POST['newsletter_sbt'])) {
    $result['status'] = true;
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $query = "SELECT * FROM newsletter where email = '" . $email . "' and status = 'active'";
    $check_subscribing = mysqli_query($connection, $query);
    $subscribing_count = mysqli_num_rows($check_subscribing);
    if (intval($subscribing_count) == 0) {
        $created = date("Y-m-d H:i:s");
        $query = "INSERT INTO newsletter(email, created) values('$email', '$created')";
        $add_subscribing = mysqli_query($connection, $query);
        if (!$add_subscribing) {
            //die("Query Failed" . mysqli_error($connection));
            $result['status'] = false;
            $result['message'] = 'Something went wrong please try again';
        } else {
            $result['message'] = '<strong>Thank you for subscribing News Letter.</strong>';            
        }
        
    } else {
        $result['message'] = '<strong>You are already subscribed.</strong> ';
    }    
}
echo json_encode($result);
