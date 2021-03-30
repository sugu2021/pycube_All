<style>
    #logo{
        width: 190px;
        margin-right: 10px;

    }
    #logo_link{
        padding:0;
    }
</style>
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <header>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" id="logo_link" href="index.php"><img id="logo" src="./images/logo.png" alt="logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="col float-right">

                    <nav class="stroke">
                        <ul class="main-nav list-inline text-right">
                  
                  <?php
				  $registration_class = '';
                    /*
                    $query = "SELECT * FROM categories";
                    $getData = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($getData)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        
                        $class_category = '';
                        $registration = 'registration.php';
                        $registration_class = '';
                        $contact = 'contact.php';
                        $contact_class = '';
                        
                        $pageName = basename($_SERVER['PHP_SELF']);
                        
                        if(isset($_GET['cat_id']) && $_GET['cat_id'] == $cat_id){
                            $class_category = 'active';
                        }
                        else if($pageName == $registration){
                            $registration_class ='active';
                        }
                        else if($pageName == $contact){
                            $contact_class = 'active';
                        }
                        
                        echo "<li class='$class_category'><a href='./category.php?cat_id=$cat_id'>{$cat_title}</a></li>";
                    }
                    */
                   ?>
                              <?php $filename = $_SERVER["PHP_SELF"]; 
                        if (!(strpos($filename, 'admin_login.php') !== false)) { ?> 
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                        <?php } ?>
<!--                    <li class="<?php echo $registration_class;?>">
                        <a href="registration.php">User Registration</a>
                    </li>-->
                    <!--li  class="<?php echo $contact_class;?>">
                    <a  href="contact.php">Contact Us</a>
                    </li-->
<!--					<li>
                        <a href="../index.php">Visit Website</a>
                    </li>-->
                </ul>
                    </nav>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </header>
    </nav>