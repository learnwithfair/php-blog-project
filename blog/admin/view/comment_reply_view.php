<?php
if ( isset( $_POST['comment_reply_btn'] ) ) {
    $comment_reply_mgs = $obj->add_comment_reply( $_POST );
}
?>
<?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "comment_reply" ) {
        $reply_id      = $_GET['id'];
        $comment_datas = $obj->display_commentby_id( $reply_id );
        $comment_data  = mysqli_fetch_assoc( $comment_datas );
        $post_data     = $obj->display_post_datasby_id( $comment_data['post_id'] );

    }

}

?>
<br>
<h2>Comment's Reply:</h2>
<div style="color:red;">
    <?php
if ( isset( $comment_reply_mgs ) ) {
    echo $comment_reply_mgs;
}
?>
</div><br>
<form action="" method='POST' class='form' enctype="multipart/form-data">

    <!-- ############################################################### -->
    <table class="table">
        <tr>
            <td>
            <th>
                <h5>Comment ID</h5>
            </th>

            <td>
                <h5>:&nbsp;&nbsp;<?php echo $comment_data['comment_id']; ?></h5>
            </td>
            </td>
            <td>
            <th>
                <h5>Post ID</h5>
            </th>

            <td>
                <h5>:&nbsp;&nbsp;<?php echo $comment_data['post_id']; ?></h5>
            </td>
            </td>

        </tr>
        <tr>
            <td>
            <th>
                <h5>Name</h5>
            </th>

            <td>
                <h5>:&nbsp;&nbsp;<?php echo $comment_data['comment_name']; ?></h5>
            </td>
            </td>
            <td>
            <th>
                <h5>Email</h5>
            </th>

            <td>
                <h5>:&nbsp;&nbsp;
                    <a
                        href="mailto:<?php echo $comment_data['comment_email']; ?>"><?php echo $comment_data['comment_email']; ?></a>
                </h5>
            </td>
            </td>

        </tr>
        <tr>
            <td>
            <th>
                <h5>Post Name</h5>
            </th>

            <td>
                <h5>:&nbsp;&nbsp;<?php echo $post_data['post_title']; ?></h5>
            </td>
            </td>
            <td>
            <th>

            </th>

            <td>

            </td>
            </td>

        </tr>
        <tr>
            <td>
            <th>
                <h5>Subject</h5>
            </th>

            <td>
                <h5>:&nbsp;&nbsp;<?php echo $comment_data['comment_subject']; ?></h5>
            </td>
            </td>
            <td>
            <th>

            </th>

            <td>

            </td>
            </td>

        </tr>

    </table>
    <!-- ############################################################### -->
    <form action="" method="POST">
        <input type="hidden" name="post_reply_id" value="<?php echo $comment_data['post_id']; ?>">
        <input type="hidden" name="post_reply_title" value="<?php echo $post_data['post_title']; ?>">
        <input type="hidden" name="comment_reply_id" value="<?php echo $comment_data['comment_id']; ?>">
        <div class="form-group">
            <label for="comment_reply_mgs" style="color:black; ">
                <h5>Reply Message:</h5>
            </label>
            <textarea type="text" name='comment_reply_mgs' id="comment_reply_mgs" class='form-control py4' rows='6'
                placeholder="Write your comment's reply message here.."></textarea>
        </div><br><br>
        <div class="form-group">
            <input type="submit" name='comment_reply_btn' value="Submit" class='form-control btn btn-block my-btn'>
        </div>

    </form>