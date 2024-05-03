<?php include_once 'class/function.php';
$obj2      = new Project();
$post_data = $obj2->display_post_data();
$post      = array();
while ( $data = mysqli_fetch_assoc( $post_data ) ) {
    array_push( $post, $data );
}

$reverse_data = array_reverse( $post );

if ( isset( $_POST['search_btn'] ) ) {
    $post_data = $obj2->display_post_data_by_search( $_POST );
    if ( !$post_data ) {
        $reverse_data = $reverse_data;
    } else {
        $post2 = array();
        while ( $data = mysqli_fetch_assoc( $post_data ) ) {
            array_push( $post2, $data );
        }
        $reverse_data = $post2;
    }

}
?>
<?php include_once 'includes/head.php';?>

<body>
    <?php include_once 'includes/preloader.php';?>
    <?php include_once 'includes/header.php';?>
    <?php include_once 'includes/banner.php';?>
    <?php include_once 'includes/call_to_action.php';?>
    <?php include_once 'includes/container.php';?>
    <?php include_once 'includes/footer.php';?>
    <?php include_once 'includes/script.php';?>
</body>

</html>