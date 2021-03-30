
<div class="col-sm-4 col-md-3 col-right">
    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="blog_search.php" method="post">
            <div class="input-group">
                <?php
                $searchText = '';
                if (isset($_POST['submit'])) {
                    $searchText = $_POST['search'];
                }
                ?>
                <input name="search" type="text" class="form-control" value="<?php echo $searchText; ?>">
                <span class="input-group-btn">
                    <button  type="submit" name="submit" class="searchBtn1">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </form><!-- End of  FORM -->
        <!-- /.input-group -->
    </div>



    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled list">
                    <?php
                    $query = "SELECT * FROM categories LIMIT 6";
                    $get_categories = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($get_categories)) {
                        $sidebar_cat_id = $row['cat_id'];
                        $sidebar_cat_title = $row['cat_title'];

                        echo "<li><a href='blog_category.php?cat_id=$sidebar_cat_id'>{$sidebar_cat_title}</a></li>";
                    }
                    ?>
                </ul>
            </div>
            
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Recent Posts</h4>
        <div class="row">
        <div class="col-md-12">
            <ul class="list-unstyled list">
                <?php
                $query = "SELECT * FROM posts where post_status='Publish' ORDER BY post_id DESC";
                $get_recent_posts = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($get_recent_posts)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_date = $row['post_date'];
                    ?>
                    <li>
                        <h5><a href="blog_post.php?post_id='<?php echo $post_id; ?>'"><?php echo $post_title; ?></a></h5>
                        <small> <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></small></li>

                    <?php
                }
                ?>
            </ul>
        </div>   
        </div>
    </div>
</div> 
