<!DOCTYPE html>
<html lang="en">
    <head>
<title>Blogs - Pycube | Top Asset Management Companies | Patient Tracking</title>
<meta name="description"  content="Blogs - Pycube, Top Asset Management Companies, Patient Tracking Software, Asset Tracking Management System, Hospital Management System Software, Patient Flow Management">
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


            <div class="clear"> </div>
            <div class="blog-section"> 
                <div class="container">
                    <div class="row">


                        <div class="col-sm-8 col-md-9 col-left" style="padding-top: 20px;">

                            <!--    <h1 class="page-header">
                                    Latest Posts
                                    
                                </h1>-->

                                <h1 class="page-header">
                                    Blogs
                                </h1>

                            <div class="row"> 
                                <?php
                                $per_page = 4;

                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];

                                    $page_1 = ($page * $per_page) - $per_page;
                                } else {
                                    $page = 1;
                                    $page_1 = 0;
                                }

                                $query = "SELECT * FROM posts where post_status='Publish'";
                                $find_post_count = mysqli_query($connection, $query);
                                $post_count = mysqli_num_rows($find_post_count);
                                $post_count = ceil($post_count / $per_page);

                                $query = "SELECT * FROM posts WHERE post_status ='Publish' ORDER BY post_id DESC LIMIT $page_1,$per_page";
                                $get_all_posts = mysqli_query($connection, $query);

                                while ($row = mysqli_fetch_assoc($get_all_posts)) {
                                    $post_id = $row['post_id'];
                                    $post_title = $row['post_title'];
                                    $post_author = $row['post_author'];
                                    $post_date = $row['post_date'];
                                    $post_image = $row['post_image'];
                                    $post_content = $row['post_content']; //substr(strip_tags($row['post_content']), 0, 220);
                                    $post_views = $row['post_views'];
                                    ?>

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
                                //Display No result
                                $count = mysqli_num_rows($get_all_posts);
                                if ($count == 0) {

                                    echo "<h1 class='text-center'>No Posts Found!</h1>";
                                }
                                ?>

                            </div>

                            <!-- Pagination Numbering According to post count  -->
                            <nav aria-label="Page navigation example" class="pagenav">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <?php
                                    for ($i = 1; $i <= $post_count; $i++) {
                                        if ($i == $page) {
                                            echo "<li class='page-item active'><a class='page-link' href='blog.php?page=$i'>$i</a></li>";
                                        } else {
                                            echo "<li class='page-item'><a class='page-link' href='blog.php?page=$i'>$i</a></li>";
                                        }
                                    }
                                    ?>

                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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