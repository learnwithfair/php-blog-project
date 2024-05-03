<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <!-- ################ -->
                        <?php

if ( $check_search_data == 1 ) {
    echo "<h2>No Result Found!!</h2>";
}?>

                        <?php

while ( $data = mysqli_fetch_assoc( $blog_post_data ) ) {

    $comment_datas             = $obj2->display_comment( $data['post_id'] );
    $comment_count1            = mysqli_num_rows( $comment_datas );
    $disply_comment_reply_data = $obj2->disply_comment_reply_count( $data['post_id'] );
    $comment_count2            = mysqli_num_rows( $disply_comment_reply_data );
    $comment_count             = $comment_count1 + $comment_count2;
    // $comment_count = 44;

    ?>
                        <div class="col-lg-6">
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
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#"><?php echo $data['post_tag']; ?></a></li>

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
                <div>
                </div>
                <?php if ( $blog_all_post_number > 6 ) {?>
                <br>
                <div class="col-lg-12">
                    <ul class="page-numbers"><?php
if ( $Previous == $blog_post_display_pegi_bumber ) {?>
                        <li><a><i class="fa fa-angle-double-left" style="opacity:0.5;"></i></a>
                        </li>
                        <?php } else {?>
                        <li class=""><a href="?start=<?php echo $Previous; ?>"><i
                                    class="fa fa-angle-double-left"></i></a>
                        </li>
                        <?php }?>

                        <?php

    $pegi_limit = 8; //How many pagi number display
    $pegi_count = 0;
    $count_pagi = 0;
    $get_number = $pegi_limit;
    for ( $i = 1; $i <= $blog_post_display_pegi_bumber; $i++ ) {
        if ( isset( $_GET['start'] ) ) {
            $get_number = $_GET['start'];
        }
        if (  ( $get_number > $pegi_limit ) ) {
            if ( $get_number > ( $blog_post_display_pegi_bumber - $pegi_limit ) ) {
                $get_number = $blog_post_display_pegi_bumber - ( $pegi_limit - 2 );
                if ( $count_pagi < ( $get_number - 3 ) ) { // In the end section display same item.
                    $count_pagi++;
                    continue;
                }

            } else {
                if ( $count_pagi < ( $get_number - ceil(  ( $pegi_limit + 1 ) / 2 ) ) ) { //Active Class position ceil(  ( $pegi_limit + 1 ) / 2 ) )
                    $count_pagi++;
                    continue;
                }
            }
        }
        $pegi_count++;

        if ( $pegi_count > ( $pegi_limit + 1 ) ) {
            break;
        }

        if ( $current_page == $i || $current_page == 0 ) {
            $current_page = -1;
            ?>

                        <!-- <li class="active"><a href="#">1</a></li> -->

                        <li class="active"><a href="?start=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } else {?>
                        <li><a href="?start=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php }

    }?>
                        <?php

    if ( $Next == ( $blog_post_display_pegi_bumber + 1 ) ) {?>
                        <li><a>
                                <i class="fa fa-angle-double-right" style="opacity:0.5;"></i></a></li>
                        <?php } else {?>
                        <li class=""><a href="?start=<?php echo $Next; ?>">
                                <i class="fa fa-angle-double-right"></i></a></li>
                        <?php }?>

                    </ul>
                </div>
                <?php }?>
            </div>

            <?php include_once 'sidebar.php';?>
        </div>
    </div>
</section>