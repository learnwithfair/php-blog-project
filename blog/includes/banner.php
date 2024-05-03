    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                <?php

$banner_data               = $obj2->blog_display_post_data( 0, 6 );
$banner_post_display_count = 0;
while ( $data = mysqli_fetch_assoc( $banner_data ) ) {
    $banner_post_display_count++;
    $comment_datas             = $obj2->display_comment( $data['post_id'] );
    $comment_count1            = mysqli_num_rows( $comment_datas );
    $disply_comment_reply_data = $obj2->disply_comment_reply_count( $data['post_id'] );
    $comment_count2            = mysqli_num_rows( $disply_comment_reply_data );
    $comment_count             = $comment_count1 + $comment_count2;

    ?>
                <div class="item">
                    <img src="uploads/<?php echo $data['post_img']; ?>" height="350px" alt="">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span><?php echo $data['Cat_Title']; ?></span>
                            </div>

                            <a href="./single_post.php?view=view&&id=<?php echo $data['post_id']; ?>">
                                <h4><?php echo $data['post_title']; ?></h4>
                            </a>
                            <ul class="post-info">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#"><?php echo $data['post_date']; ?></a></li>
                                <li><a href="#"><?php echo $comment_count ?> Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->