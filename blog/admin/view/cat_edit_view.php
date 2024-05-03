<?php
if ( isset( $_POST['update_category'] ) ) {
    $return_mgs = $obj->update_cat_datas( $_POST );
}
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "update_cat" ) {
        $id       = $_GET['id'];
        $get_data = $obj->edit_display_cat_datas( $id );
    }
}

?>
<h2>Update Category:</h2><br>
<form action="" method='POST' class='form'>


    <div class="form-group">
        <label for="cat_title" style="color:black; text-transform:uppercase; ">
            <h6>Category
                Title:</h6>
        </label>
        <input type="text" name='update_cat_title' class='form-control py4'
            value="<?php echo $get_data['Cat_Title']; ?>">
    </div>
    <div class="form-group">
        <label for="cat_des" style="color:black; text-transform:uppercase; ">
            <h6>Category
                Description:</h6>
        </label>
        <textarea type="text" name='update_cat_des' class='form-control py4'
            rows='4'><?php echo $get_data['Cat_Des']; ?></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name='update_cat_id' value="<?php echo $get_data['ID']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" name='update_category' value="Update Category" class='form-control btn btn-block my-btn'>
    </div>
    <div>
        <?php
if ( isset( $return_mgs ) ) {
    echo $return_mgs;

}
?>


    </div>


</form>