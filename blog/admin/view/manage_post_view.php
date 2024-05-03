<?php

if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "post_dlt" ) {
        $dlt_id  = $_GET['id'];
        $dlt_mgs = $obj->post_dlt( $dlt_id );
    }
}
$data = $obj->display_post_datas();
// if ( isset( $_POST['post_img_change'] ) ) {
//     $return_mgs = $obj->post_img_change_by_id( $_POST );
// }
?>
<h2>Manage Post:</h2>
<h6 style="color:red;"><?php if ( isset( $dlt_mgs ) ) {echo $dlt_mgs;}?></h6>
<div></div>
<table class="table shadow">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Thumbnail</th>
            <th>Category</th>
            <th>Author</th>
            <th>Date</th>
            <th>No. of Comm..</th>
            <th>Summary</th>
            <th>Tag</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $cout = 1;while ( $info = mysqli_fetch_assoc( $data ) ) {?>
        <tr>
            <td><?php echo $cout++; ?></td>
            <td><?php echo $info['post_title']; ?></td>
            <td><?php echo $info['post_content']; ?></td>
            <td>
                <img height='100px' height="100px" src="../uploads/<?php echo $info['post_img']; ?>" alt="">
                <br>
                <a href="post_img_change.php?status=post_img_edit&&id=<?php echo $info['post_id']; ?>">Change</a>
            </td>
            <td><?php echo $info['Cat_Title']; ?></td>
            <td><?php echo $info['post_author']; ?></td>
            <td><?php echo $info['post_date']; ?></td>
            <td><?php echo $info['post_comment_count']; ?></td>
            <td><?php echo $info['post_summary']; ?></td>
            <td><?php echo $info['post_tag']; ?></td>
            <td><?php if ( $info['post_status'] == 1 ) {echo "Published";} else {echo "Unpublished";}?></td>
            <td method='post'>
                <a href="./post_edit.php?status=post_edit&&id=<?php echo $info['post_id']; ?>" class="btn my-btn"
                    name="post_edit_btn">Edit</a>
                <div></div><br>
                <a href="?status=post_dlt&&id=<?php echo $info['post_id']; ?>" class="btn btn-danger"
                    name="post_dlt_btn">Delete</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>