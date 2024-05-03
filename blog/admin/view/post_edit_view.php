  <?php
if ( isset( $_POST['update_post'] ) ) {
    $u_post_return_mgs = $obj->update_post( $_POST );
}
?>
  <?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "post_edit" ) {
        $update_id = $_GET['id'];
        $post_data = $obj->display_post_datasby_id( $update_id );

    }
}

?>

  <h2>Update Post:</h2><br>
  <h5 style="color: red;"><?php if ( isset( $u_post_return_mgs ) ) {echo $u_post_return_mgs;}?></h5>
  <form action="" method='POST' class='form' enctype="multipart/form-data">

      <div class="form-group">
          <label for="u_post_title" style="color:black; ">
              <h6>New Post Title:</h6>
          </label>
          <input type="text" name='u_post_title' $id="u_post_title" class='form-control py4'
              value="<?php echo $post_data['post_title']; ?>">
      </div>
      <div class="form-group">
          <input type="hidden" name='u_post_id' $id="u_post_id" class='form-control py4'
              value="<?php echo $post_data['post_id']; ?>">
      </div>
      <div class="form-group">
          <label for="u_post_summary" style="color:black; ">
              <h6>New Post Summary:</h6>
          </label>
          <textarea type="text" name='u_post_summary' id="u_post_summary" class='form-control py4' rows='3'
              placeholder='Write your post summary here..'><?php echo $post_data['post_summary']; ?></textarea>
      </div>
      <div class="form-group">
          <label for="u_post_content" style="color:black; ">
              <h6>New Post Content:</h6>
          </label>
          <textarea type="text" name='u_post_content' id="u_post_content" class='form-control py4' rows='6'
              placeholder='Write your post content here..'><?php echo $post_data['post_content']; ?></textarea>
      </div>

      <div>
          <label for=" u_post_status" style="color:black;">
              <h6> New Post Status:</h6>
          </label>
          <div style="text-align:center;margin-top:-35px">
              <input type="radio" name='u_post_status' $id="u_post_status" value="1" checked> Published
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name='u_post_status' $id="u_post_status" value="0"> Unpublished
          </div>

      </div><br><br>
      <div class="form-group">
          <input type="submit" name='update_post' value="Update Post" class='form-control btn btn-block my-btn'>
      </div>
      <div>
      </div>
  </form>