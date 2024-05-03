<?php

if ( isset( $_POST['add_menu'] ) ) {
    $return_mgs = $obj->put_menu_item( $_POST );
}
?>
<h2>Add Menu Item:</h2><br>
<form action="" method='POST' class='form'>
    <div class="form-group">
        <label for="menu_title" style="color:black; ">
            <h6>Item Name:</h6>
        </label>
        <input type="text" name='menu_title' $id="menu_title" class='form-control py4'
            placeholder='Enter Menu Item Name'>
    </div>
    <div class="form-group">
        <label for="menu_link" style="color:black; ">
            <h6>Menu Link:</h6>
        </label>
        <input type="text" name='menu_link' $id="menu_link" class='form-control py4'
            placeholder='@example: about_me.php'>
    </div>
    <div class="form-group">
        <input type="submit" name='add_menu' value="Add Item" class='form-control btn btn-block my-btn'>
    </div>
    <div style="color:red;">
        <?php
if ( isset( $return_mgs ) ) {
    echo $return_mgs;
}
?>
    </div>
</form>