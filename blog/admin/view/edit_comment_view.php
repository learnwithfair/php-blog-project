<?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "edit_comment" ) {
        $id = $_GET['id'];
    }
}
if ( isset( $_POST['update_comment'] ) ) {
    $u_comment_return_mgs = $obj->edit_comment( $_POST );
}

?>
<h2>Edit Comment Stutas:</h2><br>
<h5 style="color: red;"><?php if ( isset( $u_comment_return_mgs ) ) {echo $u_comment_return_mgs;}?></h5>
<form action="" method='POST' class='form'>

    <label for=" u_post_status" style="color:black;"><br>
        <h6> Comment Status:</h6>
    </label>
    <div>
        <input type="hidden" name="u_comment_id" value=<?php echo $id ?>>
    </div>
    <div style="text-align:center;margin-top:-35px">
        <input type="radio" name='u_comment_status' $id="u_post_status" value="1" checked> Published
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name='u_comment_status' $id="u_post_status" value="2"> Unpublished
    </div>

    <br><br>
    <div class="form-group">
        <input type="submit" name='update_comment' value="Change Status" class='form-control btn btn-block my-btn'>
    </div>
</form>