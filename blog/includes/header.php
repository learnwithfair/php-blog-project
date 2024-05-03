<?php $menu_item = $obj2->display_menu_item();?>
<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2>Learn With Fair<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <!-- ######################################### -->
                <ul class="navbar-nav ml-auto">
                    <?php
// Menu display from category as reverse within 5 items .

$uri = $_SERVER['PHP_SELF'];

// Outputs: URI
while ( $item = mysqli_fetch_assoc( $menu_item ) ) {
    if ( $uri == "/blog/" ) {
        $uri = $uri . "index.php";
    }
    if ( $uri == "/blog/" . $item['menu_link'] ) {?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $item['menu_link']; ?>"><?php echo $item['menu_title']; ?>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <?php
} else {?>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="<?php echo $item['menu_link']; ?>"><?php echo $item['menu_title']; ?></a>
                    </li>
                    <?php
}

}?>
                </ul>


            </div>
        </div>
    </nav>
</header>