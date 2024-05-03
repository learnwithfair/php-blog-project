<?php

if ( isset( $_POST['add_category'] ) ) {
    $return_mgs = $obj->put_cat_datas( $_POST );
}
?>
<h2>Add Category:</h2>
<form action="" method='POST' class='form'>
    <div class="form-group">
        <input type="text" name='cat_title' class='form-control py4' placeholder='Enter Category Title'>
    </div>
    <div class="form-group">
        <textarea type="text" name='cat_des' class='form-control py4' rows='4'
            placeholder='Write your Category Description here..'></textarea>
    </div>
    <div class="form-group">
        <input type="submit" name='add_category' value="Add Category" class='my-btn form-control btn btn-block'>
    </div>
    <div>
        <?php
if ( isset( $return_mgs ) ) {
    echo $return_mgs;
}
?>
    </div>
</form>