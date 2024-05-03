<?php
if ( isset( $_POST['update_menu_item'] ) ) {
    $return_mgs = $obj->update_menu_item( $_POST );
}
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "update_menu_item" ) {
        $id   = $_GET['id'];
        $data = $obj->display_menu_item_by_id( $id );

    }
}

?>
<h2>Update Menu Item:</h2><br>
<form action="" method='POST' class='form'>
    <div class="form-group">
        <input type="hidden" name='u_menu_id' $id="u_menu_id" class='form-control py4'
            value="<?php echo $data['menu_id']; ?>">
    </div>
    <div class="form-group">
        <label for="u_menu_title" style="color:black; ">
            <h6>Item Name:</h6>
        </label>
        <input type="text" name='u_menu_title' $id="u_menu_title" class='form-control py4'
            value="<?php echo $data['menu_title']; ?>" placeholder='Enter Menu Item Name'>
    </div>
    <div class="form-group">
        <label for="u_menu_link" style="color:black; ">
            <h6>Menu Link:</h6>
        </label>
        <input type="text" name='u_menu_link' $id="u_menu_link" class='form-control py4'
            value="<?php echo $data['menu_link']; ?>" placeholder='@example: about_me.php'>
    </div>
    <div class="form-group">
        <input type="submit" name='update_menu_item' value="Update Item" class='form-control btn btn-block my-btn'>
    </div>
    <div style="color:red;">
        <?php
if ( isset( $return_mgs ) ) {
    echo $return_mgs;
}
?>
    </div>
</form>