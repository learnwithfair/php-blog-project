
    <?php include_once 'includes/head.php';?>


    <body>
	 <?php include_once 'blog/includes/preloader.php';?>
    <?php include_once 'blog/includes/header.php';?>
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="mb-4 img-error" src="assets/img/error-404-monochrome.svg" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a href="/blog/">
                                        <i class="fas fa-arrow-left mr-1"></i>
                                        Return to Home Page
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutError_footer">
                <?php include_once 'includes/footer.php';?>
            </div>
        </div>
         
    <?php include_once 'includes/script.php';?>
    </body>
</html>
