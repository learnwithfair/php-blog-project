<?php
if ( isset( $_POST['add_post'] ) ) {
    $add_post_return_mgs = $obj->add_post( $_POST );
}
?>
<?php $cat_data = $obj->display_cat_datas();?>
<h2>Add Post:</h2><br>
<h5 style="color: red;"><?php if ( isset( $add_post_return_mgs ) ) {echo $add_post_return_mgs;}?></h5>
<form action="" method='POST' class='form' enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_title" style="color:black; ">
            <h6>Post Title:</h6>
        </label>
        <input type="text" name='post_title' $id="post_title" class='form-control py4' placeholder='Enter post title'>
    </div>
    <div class="form-group">
        <label for="post_content" style="color:black; ">
            <h6>Post Content:</h6>
        </label>
        <textarea type="text" name='post_content' id="post_content" class='form-control py4' rows='6'
            placeholder='Write your post content here..'></textarea>
    </div>
    <div class="form-group">
        <label for="upload_thumbnail" style="color:black; ">
            <h6>Upload Thumbnail:</h6>
        </label>
        <input type="file" name='post_img' $id="post_img" class='form-control py4'>
    </div>
    <div class="form-group">
        <label for="post_cat" style="color:black; ">
            <h6>Post Category:</h6>
        </label>
        <select name="post_cat" id="post_cat" class="form-control py4" required>
            <option value="">Select</option>
            <?php while ( $data = mysqli_fetch_assoc( $cat_data ) ) {?>
            <option value="<?php echo $data['ID']; ?>"><?php echo $data['Cat_Title']; ?></option>
            <?php }?>
        </select>
    </div>
    <div class="form-group">
        <label for="post_summary" style="color:black; ">
            <h6>Post Summary:</h6>
        </label>
        <textarea type="text" name='post_summary' id="post_summary" class='form-control py4' rows='3'
            placeholder='Write your post summary here..'></textarea>
    </div>
    <div class="form-group">
        <label for="post_tag" style="color:black; ">
            <h6>Post Tag:</h6>
        </label>
        <input type="text" name='post_tag' $id="post_tag" class='form-control py4' placeholder='Enter Post Tag'>
    </div>
    <div>
        <label for="post_status" style="color:black;">
            <h6>Post Status:</h6>
        </label>
        <div style="text-align:center;margin-top:-35px">
            <input type="radio" name='post_status' $id="post_status" value="1" checked> Published
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name='post_status' $id="post_status" value="0"> Unpublished
        </div>

    </div><br><br>
    <div class="form-group">
        <input type="submit" name='add_post' value="Add Post" class='form-control btn btn-block my-btn'>
    </div>
    <div>
        <?php
if ( isset( $return_mgs ) ) {
    echo $return_mgs;
}
?>
    </div>
</form>