    <?php
?>

    <?php include_once 'single_post/blog_post.php';?>
    <?php
if ( isset( $_GET['check'] ) ) {
    if ( $_GET['check'] = "all_comments" ) {
        include_once 'single_post/blog_comment_all.php';
    }
} else {
    include_once 'single_post/blog_comment.php';
}
?>
    <?php include_once 'single_post/blog_comment_form.php';?>
    <div class="col-lg-4">
        <div class="sidebar">
            <div class="row">

                <?php include_once 'sidebar/recent_post.php';?>
                <?php include_once 'sidebar/category.php';?>
                <?php include_once 'sidebar/tag.php';?>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>