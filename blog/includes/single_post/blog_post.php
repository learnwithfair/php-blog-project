<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <?php if ( isset( $single_post_display_data ) ) {?>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">

                                    <img src="uploads/<?php echo $single_post_display_data['post_img']; ?>"
                                        height="400px" alt="Image cannot load.">
                                </div>
                                <div class="down-content">
                                    <span><?php echo $single_post_display_data['Cat_Title']; ?></span>
                                    <a href="#">
                                        <h4><?php echo $single_post_display_data['post_title']; ?></h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#"><?php echo $single_post_display_data['post_author']; ?></a></li>
                                        <li><a href="#"><?php echo $single_post_display_data['post_date']; ?></a></li>
                                        <li><a href="#"><?php echo $comment_count . " Comments"; ?></a>
                                        </li>
                                    </ul>
                                    <p style="text-align:justify;">
                                        <?php echo $single_post_display_data['post_content']; ?></p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a
                                                            href="#"><?php echo $single_post_display_data['post_tag']; ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#"> Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>