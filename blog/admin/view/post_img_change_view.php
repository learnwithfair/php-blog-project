<?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "post_img_edit" ) {
        $img_id = $_GET['id'];
    }
}
if ( isset( $_POST['post_img_change'] ) ) {
    $return_mgs = $obj->post_img_change_by_id( $_POST );
}
?>
<form action="" class="shadow p-5 m-5" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="upload_thumbnail" style="color:black; ">
            <h6 style="color:red;"><?php if ( isset( $return_mgs ) ) {echo $return_mgs;}?></h6>
            <h6>Upload Thumbnail:</h6>
        </label>
        <input type="file" name='u_post_img' class='form-control py4'>
        <input type="hidden" name='u_post_img_id' class='form-control py4' value="<?php echo $img_id ?>">
    </div><br><br>
    <div class="form-group">
        <input type="submit" name='post_img_change' value="Change Image" class='form-control btn btn-block my-btn'>
    </div>
</form>