<?php include_once 'class/function.php';
$obj2                          = new Project();
$per_page                      = 6;
$pegi_count                    = 0;
$blog_post                     = array();
$blog_all_post_data            = $obj2->display_post_data();
$blog_all_post_number          = mysqli_num_rows( $blog_all_post_data );
$blog_post_display_pegi_bumber = ceil( $blog_all_post_number / $per_page );

$start        = 0;
$current_page = 0;
$Next         = 2;
$Previous     = $blog_post_display_pegi_bumber;

if ( isset( $_GET['start'] ) ) {
    $start        = $_GET['start'];
    $current_page = $start;
    if ( $start == 1 ) {
        $Previous = $blog_post_display_pegi_bumber;

    } else {
        $Previous = $start - 1;

    }
    if ( $start == $blog_post_display_pegi_bumber ) {
        $Next = $blog_post_display_pegi_bumber + 1;
    } else {
        $Next = $start + 1;
    }

    $start--;
    $start = $start * $per_page;

}
$blog_post_data    = $obj2->blog_display_post_data( $start, $per_page );
$check_search_data = 0;

// ###################################

if ( isset( $_GET['searching'] ) ) {
    $searching_txt = $_GET['searching'];

    $check_search_datas = $obj2->display_post_data_by_search_by_get( $searching_txt );
    if ( !$check_search_datas ) {
        $check_search_data = 0;
        $blog_post_data    = $obj2->blog_display_post_data( $start, $per_page );
    } elseif ( !mysqli_fetch_assoc( $check_search_datas ) ) {
        $blog_all_post_number          = 1;
        $blog_post_display_pegi_bumber = ceil( $blog_all_post_number / $per_page );
        $check_search_data             = 1;
        $blog_post_data                = $obj2->display_post_data_by_search_by_get( $searching_txt );
    } else {
        $blog_all_post_number          = 1;
        $blog_post_display_pegi_bumber = ceil( $blog_all_post_number / $per_page );
        $blog_post_data                = $obj2->display_post_data_by_search_by_get( $searching_txt );
    }
}
// ###################################

if ( isset( $_POST['search_btn'] ) ) {

    $check_search_datas = $obj2->display_post_data_by_search( $_POST );

    if ( !$check_search_datas ) {
        $check_search_data = 0;
        $blog_post_data    = $obj2->blog_display_post_data( $start, $per_page );
    } elseif ( !mysqli_fetch_assoc( $check_search_datas ) ) {
        $blog_all_post_number          = 1;
        $blog_post_display_pegi_bumber = ceil( $blog_all_post_number / $per_page );
        $check_search_data             = 1;
        $blog_post_data                = $obj2->display_post_data_by_search( $_POST );
    } else {
        $blog_all_post_number          = 1;
        $blog_post_display_pegi_bumber = ceil( $blog_all_post_number / $per_page );
        $blog_post_data                = $obj2->display_post_data_by_search( $_POST );
    }

}

?>


<?php include_once 'includes/head.php';?>

<body>
    <?php include_once 'includes/preloader.php';?>
    <?php include_once 'includes/header.php';?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Recent Posts</h4>
                            <!-- <h2>Our Recent Blog Entries</h2> -->
                            <h2 id="animated_text_color" data-text="Our Recent Blog Entries ! "
                                class="animated_heading">
                                Our Recent Blog Entries ! &nbsp;
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->
    <?php include_once 'includes/call_to_action.php';?>
    <?php include_once 'includes/blog_page_container.php';?>
    <?php include_once 'includes/footer.php';?>
    <?php include_once 'includes/script.php';?>
</body>

</html>