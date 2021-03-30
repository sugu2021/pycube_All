<?php  include "includes/database.php"; ?>
 <?php  include "includes/header.php"; ?>
 
    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    <style>
        .label-width{
            width:90px;
        }
        #login-header{
            margin-bottom: 30px;
        }
        .form-wrap{
            margin-top:60px;
        }
        #btn-login{
            margin:60px 0 80px 0;
        }

    </style>
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center well">
                <div class="form-wrap" style="width:60%; margin:auto;">
                <h1 id="login-header" class="text-center">Admin Login</h1>
                    <form role="form" action="includes/login.php" method="post" id="login-form" autocomplete="off">
                       <div class="form-group">
                            <span class="input-group">
                              <span class="input-group-btn">
                                  <label for="username" class="btn btn-default label-width"> Username </label>
                               </span>
                               <input type="text" class="form-control" name="username" placeholder="User">
                            </span>
                        </div> 
                       <div class="form-group">
                            <span class="input-group">
                              <span class="input-group-btn">
                                  <label class="btn btn-default label-width" for="username"> Password </label>
                               </span>
                               <input type="password" class="form-control" name="user_password" placeholder="***">
                            </span>
                        </div>
                        <div class="form-group text-center">
                        <input type="submit" name="login" id="btn-login" class="btn btn-primary btn-lg btn-block text-center" value="Login">
                        </div>
                    </form>
                     <?php
                     if(isset($_GET['message'])){ 
                        $message = $_GET['message'];
                        echo "<hr><h5 class='alert alert-danger text-center'>$message</h5>";
                    }
                    
                    ?>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


<hr>

 