<?php

?>

<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">

                        <?php

$post_display_count = 0;
if ( !$reverse_data ) {
    echo "<h2>No Result Found!!</h2>";
}
foreach ( $reverse_data as $data ) {
    $post_display_count++;
    $comment_datas             = $obj2->display_comment( $data['post_id'] );
    $comment_count1            = mysqli_num_rows( $comment_datas );
    $disply_comment_reply_data = $obj2->disply_comment_reply_count( $data['post_id'] );
    $comment_count2            = mysqli_num_rows( $disply_comment_reply_data );
    $comment_count             = $comment_count1 + $comment_count2;
    // $comment_count = 44;
    if ( $post_display_count > 5 ) {break;}
    ?>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="uploads/<?php echo $data['post_img']; ?>" height="350px" alt="">

                                </div>
                                <div class="down-content">
                                    <span><?php echo $data['Cat_Title']; ?></span>
                                    <a href="./single_post.php?view=view&&id=<?php echo $data['post_id']; ?>">
                                        <h4><?php echo $data['post_title']; ?></h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#"><?php echo $data['post_date']; ?></a></li>
                                        <li><a href="#"><?php echo $comment_count ?> Comments</a></li>
                                    </ul>
                                    <p style="text-align:justify;"><?php echo $data['post_summary']; ?> <a
                                            rel="nofollow" href="#" target="_parent">Contact
                                            learn with fair</a> for more info. Thank you.</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#"><?php echo $data['post_tag']; ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#"> Twitter</a></li>
                                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                                    <script type="text/javascript"
                                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62127f5eaf7784e5">
                                                    </script>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div style="width:100%;text-align:right;"> <?php if ( $post_display_count > 5 ) {?>
                    <a href="./blog_page.php?start=1" class="my-btn" style="">See All</a>
                    <?php }?>
                </div>
            </div>

            <?php include_once 'sidebar.php';?>
        </div>
    </div>
</section>