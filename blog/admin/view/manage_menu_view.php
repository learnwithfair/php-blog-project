<?php

if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "menu_item_dlt" ) {
        $delete_id         = $_GET['id'];
        $menu_item_dlt_mgs = $obj->delete_menu_item( $delete_id );
    }
}
$data = $obj->display_menu_item();
?>
<h2>Manage Menu:</h2><br>
<h5 style="color:red;"><?php if ( isset( $menu_item_dlt_mgs ) ) {echo $menu_item_dlt_mgs;}?></h5>
<div></div>
<table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Item Name</th>
            <th>Item Link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1;while ( $info = mysqli_fetch_assoc( $data ) ) {?>
        <tr>
            <td><?php echo $count++; ?></td>
            <td><?php echo $info['menu_title']; ?></td>
            <td><?php echo $info['menu_link']; ?></td>
            <td>
                <a type="submit" href="?status=menu_item_dlt&&id=<?php echo $info['menu_id']; ?>" name="menu_item_dlt"
                    class="btn btn-danger">Delete</a>
                <a href="./edit_menu_item.php?status=update_menu_item&&id=<?php echo $info['menu_id']; ?>"
                    name="menu_item_edit" class="btn my-btn">Edit</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>