<?php include_once 'class/function.php';
$obj2 = new Project();?>
<?php

if ( isset( $_POST['submit'] ) ) {
    $set_return_mgs = $obj2->set_message( $_POST );
    // $name           = $_POST['message_name'];
    // $subject        = $_POST['message_subject'];
    // $email          = $_POST['message_email'];
    // $message        = $_POST['message_content'];
    // $sent_subject   = "Mail From Learn With Fair";
    // $txt            = "Hello " . $name . "Thank you contacting us. We will inform about this \r\n" . $subject;
    // $heardrs        = "From:learnwithfair@gmail.com" . "\r\n" . "CC:learnwithfair@gmail.com";
    // mail( $email, $subject, $txt, $heardrs );
    // echo "Successfully Done";
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
                            <h4>contact us</h4>
                            <!-- <h2>let’s stay in touch!</h2> -->
                            <h2 id="animated_text_color" data-text="let’s stay in touchn ! " class="animated_heading">
                                let’s stay in touch ! &nbsp;

                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->


    <section class="contact-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="down-contact">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="sidebar-item contact-form">
                                    <div class="sidebar-heading">
                                        <h2>Send us a message</h2>
                                        <h5 style="color: red;">
                                            <?php if ( isset( $set_return_mgs ) ) {echo $set_return_mgs;}?>
                                        </h5>
                                    </div>
                                    <div class="content">
                                        <form id="contact" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="message_name" type="text" id="message_name"
                                                            placeholder="Your name" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="message_email" type="email" id="message_email"
                                                            placeholder="Your Email" required=""
                                                            style="text-transform:none;">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <fieldset>
                                                        <input name="message_subject" type="text" id="message_subject"
                                                            placeholder="Subject">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="message_content" rows="6" id="message_content"
                                                            placeholder="Write your message here..." required=""
                                                            style="text-transform:none;"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" name='submit'
                                                            class="main-button">Send
                                                            Message</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sidebar-item contact-information">
                                    <div class="sidebar-heading">
                                        <h2>contact information</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <h5><a href="tel:+01790-224950">01790-224950</a></h5>
                                                <span>PHONE NUMBER</span>
                                            </li>
                                            <li>
                                                <h5><a href="mailto:learnwithfair@gmail.com">learnwithfair@gmail.com</a>
                                                </h5>
                                                <span>EMAIL ADDRESS</span>
                                            </li>
                                            <li>
                                                <h5>Rajapur, Pabna-6600,
                                                    <br>Pabna University of Science and Technology
                                                </h5>
                                                <span>STREET ADDRESS</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.5047364624033!2d89.2762166143537!3d24.013260084601924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84f0ec23a72b%3A0x775d6cd53cbdad8b!2sPabna%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1645125525754!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php include_once 'includes/footer.php';?>
    <?php include_once 'includes/script.php';?>
</body>

</html>