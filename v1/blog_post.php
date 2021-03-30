
<!DOCTYPE html>
<html lang="en">
    <head>
<title>Pycube Blogs</title>
        <?php include './includes/header_links.php'; ?>
        <link href="css/blog.css" rel="stylesheet">
    </head>
    <body>
        <!-- mobile menus -->
        <div class="mp-pusher" id="mp-pusher">

            <!-- mp-menu -->
            <?php include './includes/mobile_menu.php'; ?>
            <!-- /mp-menu -->

            <!-- header start here -->
            <?php include './includes/header.php'; ?>
            <!-- header ends here -->
            <!--- include database, function files -->
            <?php include "blog/includes/database.php"; ?>
            <?php include "blog/admin/functions.php" ?>
            <?php session_start(); ?>

            <!-- content -->


            <div class="clear"> </div>
            <div class="blog-section"> 
                <div class="container">
                    <div class="row">


                        <div class="col-sm-8 col-md-9 col-left blog-int-con">

                            <!--    <h1 class="page-header">
                                    Latest Posts
                                    
                                </h1>-->


                            <div class="row"> 

                                <?php
                                if (isset($_GET['post_id'])) {

                                    $post_id = $_GET['post_id'];

                                    $query = "UPDATE posts SET post_views = post_views + 1 WHERE post_id = $post_id";
                                    $get_post_view = mysqli_query($connection, $query);

                                    $query = "SELECT * FROM posts WHERE post_id ={$post_id} ";
                                    $get_all_posts = mysqli_query($connection, $query);

                                    while ($row = mysqli_fetch_assoc($get_all_posts)) {

                                        $post_title = $row['post_title'];
                                        $post_author = $row['post_author'];
                                        $post_date = $row['post_date'];
                                        $post_image = $row['post_image'];
                                        $post_content = $row['post_content'];
                                        $post_views = $row['post_views'];
                                        ?>


                                        <div class="col-sm-12"> 
                                            <!-- Blog Post -->

                                            <div class="zoom-img">
                                                <div class="sub-img" style='background-image:url("blog/images/<?php echo $post_image; ?>"); background-size:cover;'> 
                                                    <img  class="img-responsive" src="blog/images/blog_post/pycube-noimg.png" alt=""> 
                                                </div>  
                                            </div>
                                            <h2>
                                                <?php echo $post_title; ?> 
                                            </h2>

                                            <div ><?php echo ($post_content); ?>  </div>

                                            <p class="text-right small"> <i class="fa fa-clock-o"></i> Posted on <?php echo $post_date; ?> | <span class="text-right user-name"> <i class="fa fa-user"></i>  <a href="javascript:void(0)"><?php echo $post_author; ?></a> </span> </p>





                                        </div>               



                                        <?php
                                    }
                                } else {
                                    header("Location: index.php");
                                }
                                ?>

                                <!-- Comments Form -->

                                <?php
                                if (isset($_POST['add_comment'])) {
                                    $comment_post_id = $_GET['post_id'];
                                    $comment_author = $_POST['comment_author'];
                                    $comment_email = $_POST['comment_email'];
                                    $comment_content = $_POST['comment_content'];
                                    $comment_date = date('d-m-y');

                                    if (!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {
                                        $query = "INSERT INTO comments(comment_post_id ,comment_author ,comment_email, comment_content, comment_date) values($comment_post_id,'$comment_author','$comment_email','$comment_content',now() )";

                                        $add_comment = mysqli_query($connection, $query);

                                        confirm_query($add_comment);
                                        $success = "Succesfully Commented!";
                                    } else {
                                        $error = "All fields are requried!";
                                    }
                                }
                                ?>

                                <div class="col-sm-8"> 

                                    <div class="clear"> </div>
                                    <form class="form mt-40 scrollflow -pop -opacity" method="post" id="blogcomment_form" action="" > 
                                        <div class="form-group"> <h3> Leave a Comment: </h3> </div>
                                        <div id="blogcomment_form_res"> <?php
                                            if (isset($error)) {
                                                echo "<h4 class='alert alert-danger text-center'>{$error}</h4>";
                                            }
                                            if (isset($success)) {
                                                echo "<h4 class='alert alert-success text-center'>{$success}</h4>";
                                            }
                                            ?></div>
                                        <div class="form-group pt10">
                                            <input type="text" name="comment_author" id="comment_author" placeholder="Author"  class="form-control required" /> 
                                        </div> 
                                        <div class="form-group"> 
                                            <input type="email" name="comment_email" placeholder="E-mail Address"  class="form-control required" />
                                        </div>

                                        <div class="form-group"> 
                                            <textarea name="comment_content"  placeholder="Comment" rows="5" class="form-control required"></textarea>
                                        </div>
                                        <div class="form-group"> 
                                            <button type="submit" name="add_comment" class="btn btn-primary blog-button" style="font-size: 14px !important">Add Comment </button>
                                        </div> 		

                                    </form>


                                </div>




                                <div class="well col-sm-8" > 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list-unstyled list">

                                                <!-- Posted Comments -->

                                                <!--Display Only Approved Comments Comment -->
                                                <?php
                                                if (isset($_GET['post_id'])) {
                                                    $post_id = $_GET['post_id'];

                                                    $query = "SELECT * FROM comments WHERE comment_post_id = $post_id AND comment_status ='Approved' ORDER BY comment_id DESC";
                                                    $get_comments = mysqli_query($connection, $query);

                                                    while ($row = mysqli_fetch_assoc($get_comments)) {
                                                        $comment_author = $row['comment_author'];
                                                        $comment_email = $row['comment_email'];
                                                        $comment_content = $row['comment_content'];
                                                        $comment_date = $row['comment_date'];
                                                        $comment_status = $row['comment_status'];
                                                        ?>
                                                        <li>
                                                            <h4><i class="fa fa-user"></i><?php echo $comment_author; ?>
                                                                <small>From <?php echo $comment_email; ?>, <?php echo $comment_date; ?></small></h4>

                                                           <h3> <?php echo $comment_content; ?><h3></li>
                                                        <hr>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>   
                                    </div>
                                </div>
                              


                            </div>
                        </div>

                        <!-- Blog Sidebar Widgets Column -->

<?php include "blog_sidebar.php" ?>


                    </div>
                    <!-- /.row -->





                </div>

            </div> 

            <div class="clear"> </div> 
            <script>
<?php if (isset($error) || isset($success)) { ?>
                    $('#comment_author').focus();
<?php } ?>

            </script>
            <!-- footer start here -->
<?php include './includes/footer.php'; ?>            
            <!-- footer ends here --> 
        </div>  
<?php include './includes/footer_links.php'; ?>
    </body>
</html>

