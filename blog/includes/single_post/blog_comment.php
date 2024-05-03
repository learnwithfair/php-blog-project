  <?php
$count         = 0;
$comments_data = array();
while ( $comment = mysqli_fetch_assoc( $comment_datas ) ) {
    array_push( $comments_data, $comment );
}
$reverse_comment_data = array_reverse( $comments_data );
?>
  <div class="col-lg-12">
      <div class="sidebar-item comments">
          <div class="sidebar-heading">
              <h2><?php echo $comment_count; ?> comments</h2>
          </div>
          <div class="content">
              <ul>
                  <?php foreach ( $reverse_comment_data as $comment_data ) {
    $count++;
    if ( $count > 3 ) {
        break;}?>
                  <li>
                      <div class="author-thumb">
                          <img src="assets/images/person-icon.png" alt=""
                              style="border-radius:50%; border:2px black solid; ">
                      </div>
                      <div class="right-content">
                          <h4><?php echo $comment_data['comment_name']; ?><span><?php echo $comment_data['comment_date']; ?></span>
                          </h4>
                          <p style="text-align:justify"><?php echo $comment_data['comment_message']; ?></p>
                      </div>
                  </li>
                  <?php
$disply_comment_reply_data = $obj2->disply_comment_reply( $comment_data['comment_id'] );
    $comments_reply_data       = array();
    while ( $comment_reply = mysqli_fetch_assoc( $disply_comment_reply_data ) ) {
        array_push( $comments_reply_data, $comment_reply );
    }
    $reverse_comment_reply_data = array_reverse( $comments_reply_data );
    foreach ( $reverse_comment_reply_data as $comment_reply_data ) {?>
                  <li class="replied">
                      <div class="author-thumb">
                          <img src="./uploads/rahatul_admin.png" alt="" style="border-radius:50%;">
                      </div>
                      <div class="right-content">
                          <h4>MD RAHATUL RABBI<span><?php echo $comment_reply_data['comment_reply_date']; ?></span></h4>
                          <p style="text-align:justify;"><?php echo $comment_reply_data['comment_reply_mgs']; ?></p>
                      </div>
                  </li>
                  <?php }
}

?>
              </ul>
          </div>
      </div>
  </div>
  <div style="width:100%;text-align:right;"> <?php if ( $count > 3 ) {?>
      </br>
      <a href="././single_post.php?view=view&&id=<?php echo $single_post_id ?>&&check=all_comments" class="my-btn"
          name="see_all_comment" style="">See All</a>
      <?php }?>
  </div>