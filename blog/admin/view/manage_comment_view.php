<?php

if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "comment_dlt" ) {
        $delete_id       = $_GET['id'];
        $comment_dlt_mgs = $obj->delete_comment( $delete_id );

    }
}
$data = $obj->display_comment();
?>
<h2>Manage Comments:</h2><br>
<h5 style="color:red;"><?php if ( isset( $comment_dlt_mgs ) ) {echo $comment_dlt_mgs;}?></h5>
<div></div>
<table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>Post ID</th>
            <th>Post Title</th>
            <th>Message</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1;while ( $info = mysqli_fetch_assoc( $data ) ) {?>
        <tr>
            <td><?php echo $count++; ?></td>
            <td><?php echo $info['comment_name']; ?></td>
            <td><?php echo $info['comment_subject']; ?></td>
            <td><a href="mailto:<?php echo $info['comment_email']; ?>"><?php echo $info['comment_email']; ?></a></td>
            <td><?php echo $info['post_id']; ?></td>
            <td><?php
$post_data = $obj->display_post_datasby_id( $info['post_id'] );
    echo $post_data['post_title'];
    ?></td>
            <td style="text-align:justify;"><?php echo $info['comment_message']; ?></td>
            <td><?php echo $info['comment_date']; ?></td>
            <td><?php if ( $info['comment_status'] == 1 ) {echo "Published";} else {echo "Unpublished";}?>
                <a href="./edit_comment.php?status=edit_comment&&id=<?php echo $info['comment_id']; ?>">Edit</a>
            </td>
            <td>
                <a type="submit" href="?status=comment_dlt&&id=<?php echo $info['comment_id']; ?>" name="comment_dlt"
                    class="btn btn-danger">Delete</a><br><br>
                <a href="./comment_reply.php?status=comment_reply&&id=<?php echo $info['comment_id']; ?>"
                    name="comment_reply" class="btn my-btn">Reply</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>