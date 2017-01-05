<?php
    include "includes/db.php";
    include "includes/header.php";

    function truncate($string,$length=100,$append="&hellip;") {
        $string = trim($string);

        if(strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
        }

        return $string;
    }
?>

    <!-- Navigation -->

    <?php include "includes/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php
                    if(isset($_GET['p_id'])) {
                        $post_id = $_GET['p_id'];
                    }
                    $query = "SELECT * FROM posts WHERE post_id = $post_id";
                    $results_posts = mysqli_query($connection,$query);
                    while ($row = mysqli_fetch_assoc($results_posts)) {
                        $post_title = $row["post_title"];
                        $post_author = $row["post_author"];
                        $post_date = $row["post_date"];
                        $post_image = $row["post_image"];
                        $post_content = $row["post_content"];
                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <?php } ?>

                <!-- Blog Comments -->


                <?php 
                    if(isset($_POST['create_comment'])) {
                        $post_id;

                        $comment_author = mysqli_real_escape_string($connection, $_POST['comment_author']);

                        $comment_email = mysqli_real_escape_string($connection, $_POST['comment_email']);

                        $comment_content = mysqli_real_escape_string($connection, $_POST['comment_content']);

                        $query = "INSERT INTO comments (comment_post_id, comment_date, comment_author, comment_email, comment_content, comment_status) ";
                        $query .= "VALUES ($post_id, now(), '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved')";

                        $comment_insert_result = mysqli_query($connection, $query);

                        if(!$comment_insert_result) {
                            die("something went wrong" . mysqli_error($connection));
                        }

                        $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = $post_id";
                        
                        $update_comment_count = mysqli_query($connection, $query);


                    }
                ?>

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="comment_author" required>
                        </div>

                        <div class="form-group">
                             <input type="email" class="form-control" placeholder="Email" name="comment_email" required>
                        </div>

                        <div class="form-group">
                            <textarea name="comment_content" class="form-control" rows="3"></textarea>
                        </div>

                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>

                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->

                <?php
                    $query = "SELECT * FROM comments WHERE comment_post_id = {$post_id} ";
                    $query .= "AND comment_status = 'approved' ";
                    $query .= "ORDER BY comment_id DESC ";

                    $comment_result = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($comment_result)) {
                        $comment_date = $row['comment_date'];
                        $comment_content = $row['comment_content'];
                        $comment_author = $row['comment_author'];
                    ?>

                    <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small><?php echo $comment_date; ?></small>
                        </h4>
                        <?php echo $comment_content; ?>
                    </div>
                </div>

                    <?php } ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

        <?php include "includes/footer.php" ?>
