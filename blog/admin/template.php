<?php
include "class/function.php";
$obj = new blogProject();
session_start();
$id = $_SESSION['ID'];
if ( $id == null ) {
    header( "location: index.php" );
}
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == 'logout' ) {
        $obj->logout_info();
    }
}

include_once "include/head.php";?>

<body class="sb-nav-fixed">
    <?php include_once "include/topnav.php";?>
    <div id="layoutSidenav">
        <?php include_once "include/sidenav.php";?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
if ( !isset( $view ) ) {
    include 'view/dashboard_view.php';
} else {
    if ( $view == "dashboard" ) {
        include 'view/dashboard_view.php';
    } else if ( $view == 'add_category' ) {
        include 'view/add_category_view.php';
    } else if ( $view == 'manage_category' ) {
        include 'view/manage_category_view.php';
    } else if ( $view == 'add_post' ) {
        include 'view/add_post_view.php';
    } else if ( $view == 'manage_post' ) {
        include 'view/manage_post_view.php';
    } else if ( $view == 'cat_edit' ) {
        include 'view/cat_edit_view.php';
    } else if ( $view == 'post_img_change' ) {
        include 'view/post_img_change_view.php';
    } else if ( $view == 'post_edit' ) {
        include 'view/post_edit_view.php';
    } else if ( $view == 'add_menu' ) {
        include 'view/add_menu_view.php';
    } else if ( $view == 'manage_menu' ) {
        include 'view/manage_menu_view.php';
    } else if ( $view == 'edit_menu_item' ) {
        include 'view/edit_menu_item_view.php';
    } else if ( $view == 'manage_comment' ) {
        include 'view/manage_comment_view.php';
    } else if ( $view == 'edit_comment' ) {
        include 'view/edit_comment_view.php';

    } else if ( $view == 'comment_reply' ) {
        include 'view/comment_reply_view.php';

    } else if ( $view == 'manage_message' ) {
        include 'view/manage_message_view.php';
    }
}

?>
                </div>
            </main>
            <?php include_once "include/footer.php";?>
        </div>
    </div>
    <?php include_once "include/script.php";?>
</body>

</html>