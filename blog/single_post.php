<?php include_once 'class/function.php';
$obj2 = new Project();

?>
<?php if ( isset( $_GET['view'] ) ) {
    if ( $_GET['view'] = "view" ) {
        $single_post_id           = $_GET['id'];
        $single_post_display_data = $obj2->display_single_post_by_id( $single_post_id );
    }
}
?>
<?php
if ( isset( $_GET['view'] ) ) {
    if ( $_GET['view'] = "view" ) {
        $single_post_id            = $_GET['id'];
        $comment_datas             = $obj2->display_comment( $single_post_id );
        $comment_count1            = mysqli_num_rows( $comment_datas );
        $disply_comment_reply_data = $obj2->disply_comment_reply_count( $single_post_id );
        $comment_count2            = mysqli_num_rows( $disply_comment_reply_data );
        $comment_count             = $comment_count1 + $comment_count2;
        // $comment_count = 50;
    }
}?>
<?php include_once 'includes/head.php';?>

<body>

    <?php include_once 'includes/preloader.php';?>
    <?php include_once 'includes/header.php';?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Post Details</h4>
                            <h2>
                                <?php echo $single_post_display_data['post_title']; ?>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->
    <?php include_once 'includes/call_to_action.php';?>
    <?php include_once 'includes/single_post_container.php';?>



    <?php include_once 'includes/footer.php';?>
    <?php include_once 'includes/script.php';?>
</body>

</html>