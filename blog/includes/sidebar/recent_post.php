<?php //calling into container page
$recent_post_data = $obj2->display_recent_post_data();
?>

<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
            <h2>Recent Posts</h2>
        </div>
        <div class="content">
            <ul>
                <?php
$recent_post = array();
while ( $recent_data = mysqli_fetch_assoc( $recent_post_data ) ) {
    array_push( $recent_post, $recent_data );
}
$recent_post_title_count = 0;
$recent_reverse_data     = array_reverse( $recent_post );
foreach ( $recent_reverse_data as $recent_post_title ) {
    $recent_post_title_count++;
    if ( $recent_post_title_count > 7 ) {break;}?>

                <li>
                    <a href="./single_post.php?view=view&&id=<?php echo $recent_post_title['post_id']; ?>">
                        <h5><?php echo $recent_post_title['post_title']; ?></h5>
                        <span><?php echo $recent_post_title['post_date']; ?></span>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>