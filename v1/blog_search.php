
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './includes/header_links.php'; ?>
        <link href="css/blog.css" rel="stylesheet">
    </head>
    <body>
        <!-- mobile menus -->
        <div class="mp-pusher" id="mp-pusher">
            <?php
            $search = isset($_POST['search']) ? $_POST['search'] : '';
            if ($search == '') {
                header("Location:blog.php");
            }
            ?>
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


                        <div class="col-sm-8 col-md-9 col-left">

                            <!--    <h1 class="page-header">
                                    Latest Posts
                                    
                                </h1>-->


                            <div class="row"> 



                                <?php
                                if (isset($_POST['submit'])) {
                                    $search = $_POST['search'];

                                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";

                                    $search_query = mysqli_query($connection, $query);
                                    if (!$search_query) {

                                        die("Query Failed." . mysqli_error($connection));
                                    }

                                    $count = mysqli_num_rows($search_query);

                                    if ($count == 0) {

                                        echo "<h1>No Blogs Found!!</h1>";
                                    } else {

                                        while ($row = mysqli_fetch_assoc($search_query)) {
                                            $post_id = $row['post_id'];
                                            $post_title = $row['post_title'];
                                            $post_author = $row['post_author'];
                                            $post_date = $row['post_date'];
                                            $post_image = $row['post_image'];
                                            $post_content = $row['post_content'];
                                            ?>
                                              <!-- First Blog Post -->

                                    <div class="col-sm-12"> 
                                        <!-- Blog Post -->

                                        <div class="row pt20">
                                            <div class="col-sm-6">
                                                <div class="zoom-img listpage" >
                                                    <div class="sub-img" style='background-image:url("blog/images/<?php echo $post_image; ?>"); background-size:cover;'> 
                                                        <a href="blog_post.php?post_id=<?php echo $post_id; ?>" ><img  class="img-responsive" src="blog/images/blog_post/pycube-noimg.png" alt=""></a>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h2>
                                                    <a href="blog_post.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                                                </h2>
                                                <div class="post-con"><?php echo ($post_content); ?>  </div>
                                                <span> <a  class="more" href="blog_post.php?post_id=<?php echo $post_id; ?>">Read More..</a> ></span>
                                                <p class="text-right small"> <i class="fa fa-clock-o"></i> Posted on <?php echo $post_date; ?> | <span class="text-right user-name"> <i class="fa fa-user"></i>  <a href="javascript:void(0)"><?php echo $post_author; ?></a> </span> </p>

                                            </div>
                                        </div>



                                    </div>
                                        <?php
                                        }
                                    }
                                }
                                ?>






                            </div>
                        </div>

                        <!-- Blog Sidebar Widgets Column -->

<?php include "blog_sidebar.php" ?>


                    </div>
                    <!-- /.row -->





                </div>

            </div> 

            <div class="clear"> </div> 
            <!-- footer start here -->
<?php include './includes/footer.php'; ?>            
            <!-- footer ends here --> 
        </div>  
<?php include './includes/footer_links.php'; ?>
    </body>
</html>


