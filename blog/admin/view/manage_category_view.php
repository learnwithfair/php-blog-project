
<?php

// if ( isset( $_GET['status'] ) ) {
//     if ( $_GET['status'] = "cat_delete" ) {
//         $delete_id   = $_GET['id'];
//         $cat_dlt_mgs = $obj->delete_category( $delete_id );
//     }
// }
$data = $obj->display_cat_datas();
?>
<h2>Manage Category:</h2>
<h5 style="color:red;"><?php if ( isset( $cat_dlt_mgs ) ) {echo $cat_dlt_mgs;}?></h5>
<div></div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1;while ( $info = mysqli_fetch_assoc( $data ) ) {?>
        <tr>
            <td><?php echo $count++; ?></td>
            <td><?php echo $info['Cat_Title']; ?></td>
            <td><?php echo $info['Cat_Des']; ?></td>
            <td>
                <!-- <a type="submit" href="?status=cat_delete&&id=<?php //echo $info['ID']; ?>" name="cat_delete"
                    class="btn btn-danger">Delete</a> -->
                <a href="./cat_edit.php ?status=update_cat&&id=<?php echo $info['ID']; ?>" name="edit"
                    class="btn my-btn">Edit</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>