<?php include "database.php"; ?>
<?php session_start(); ?>


<?php

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['user_password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $get_user_login = mysqli_query($connection, $query);
    
    if(!$get_user_login){
        die("Query failed".mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($get_user_login)){
        
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
    }
    
    $hashed_password = crypt($password, $db_user_password);
    //echo $db_user_password.'<br/>';
    //echo $hashed_password;die();
    if($username && $db_user_password == $hashed_password){
       
        //&& password_verify($password,$db_user_password)
        if($username === $db_username ){
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['user_role'] = $db_user_role;
            $_SESSION['password'] = $password;
            header("Location: ../admin");
        }
        else{
            header("Location: ../admin_login.php?message=Incorrect Username/Password");
        }
    }
    else{
        header("Location: ../admin_login.php?message=Invalid! Username and Password");
    }

}


?>