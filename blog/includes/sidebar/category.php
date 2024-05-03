<?php $cat_data = $obj2->display_cat_datas();?>
<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>
                <?php while ( $data = mysqli_fetch_assoc( $cat_data ) ) {?>


                <li><a
                        href="././blog_page.php?searching=<?php echo $data['Cat_Title']; ?>">-<?php echo $data['Cat_Title'] ?></a>
                </li>

                <?php }?>

            </ul>
        </div>
    </div>
</div>